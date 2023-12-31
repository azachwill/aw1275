---
title: readr 0.1.0
authors: 
- Hadley Wickham
authormeta: hadley-wickham
date: '2015-04-09'
categories:
- Packages
- tidyverse
slug: readr-0-1-0
blogcategories:
- Products and Technology
- Open Source
tags:
- Packages
- tidyverse
events: blog
---

<blockquote>
<p class="body-md-regular body-sm-regular">
Please note that the information presented in this post reflects the package as it stood when initially released, and may now be outdated. For the most up-to-date information, kindly refer to <https://readr.tidyverse.org/>.
</p>
</blockquote>

I'm pleased to announced that readr is now available on CRAN. Readr makes it easy to read many types of tabular data:

  * Delimited files with`read_delim()`, `read_csv()`, `read_tsv()`, and `read_csv2()`.

  * Fixed width files with `read_fwf()`, and `read_table()`.

  * Web log files with `read_log()`.

You can install it by running:

```r
install.packages("readr")
```

Compared to the equivalent base functions, readr functions are around 10x faster. They're also easier to use because they're more consistent, they produce data frames that are easier to use (no more `stringsAsFactors = FALSE`!), they have a more flexible column specification, and any parsing problems are recorded in a data frame. Each of these features is described in more detail below.

## Input

All readr functions work the same way. There are four important arguments:

  * `file` gives the file to read; a url or local path. A local path can point to a a zipped, bzipped, xzipped, or gzipped file - it'll be automatically uncompressed in memory before reading. You can also pass in a connection or a raw vector.

For small examples, you can also supply literal data: if `file` contains a new line, then the data will be read directly from the string. Thanks to [data.table](https://github.com/Rdatatable/data.table) for this great idea!

```r
library(readr)
read_csv("x,y\n1,2\n3,4")
#>   x y
#> 1 1 2
#> 2 3 4
```

  * `col_names`: describes the column names (equivalent to `header` in base R). It has three possible values:

    * `TRUE` will use the the first row of data as column names.

    * `FALSE` will number the columns sequentially.

    * A character vector to use as column names.

  * `col_types`: overrides the default column types (equivalent to `colClasses` in base R). More on that below.

  * `progress`: By default, readr will display a progress bar if the estimated loading time is greater than 5 seconds. Use `progress = FALSE` to suppress the progress indicator.

## Output

The output has been designed to make your life easier:

  * Characters are never automatically converted to factors (i.e. no more `stringsAsFactors = FALSE`!).

  * Column names are left as is, not munged into valid R identifiers (i.e. there is no `check.names = TRUE`). Use backticks to refer to variables with unusual names, e.g. ``df$`Income ($000)```.

  * The output has class `c("tbl_df", "tbl", "data.frame")` so if you also use [dplyr](https://blog.rstudio.com/2015/01/09/dplyr-0-4-0/) you'll get an enhanced print method (i.e. you'll see just the first ten rows, not the first 10,000!).

  * Row names are never set.

## Column types

Readr heuristically inspects the first 100 rows to guess the type of each columns. This is not perfect, but it's fast and it's a reasonable start. Readr can automatically detect these column types:

  * `col_logical()` [l], contains only `T`, `F`, `TRUE` or `FALSE`.

  * `col_integer()` [i], integers.

  * `col_double()` [d], doubles.

  * `col_euro_double()` [e], "Euro" doubles that use `,` as the decimal separator.

  * `col_date()` [D]: Y-m-d dates.

  * `col_datetime()` [T]: ISO8601 date times

  * `col_character()` [c], everything else.

You can manually specify other column types:

  * `col_skip()` [_], don't import this column.

  * `col_date(format)` and `col_datetime(format, tz)`, dates or date times parsed with given format string. Dates and times are rather complex, so they're described in more detail in the next section.

  * `col_numeric()` [n], a sloppy numeric parser that ignores everything apart from 0-9, `-` and `.` (this is useful for parsing currency data).

  * `col_factor(levels, ordered)`, parse a fixed set of known values into a (optionally ordered) factor.

There are two ways to override the default choices with the `col_types` argument:

  * Use a compact string: `"dc__d"`. Each letter corresponds to a column so this specification means: read first column as double, second as character, skip the next two and read the last column as a double. (There's no way to use this form with column types that need parameters.)

  * With a (named) list of col objects:

```r
read_csv("iris.csv", col_types = list(
  Sepal.Length = col_double(),
  Sepal.Width = col_double(),
  Petal.Length = col_double(),
  Petal.Width = col_double(),
  Species = col_factor(c("setosa", "versicolor", "virginica"))
))
```

Any omitted columns will be parsed automatically, so the previous call is equivalent to:

    read_csv("iris.csv", col_types = list(
      Species = col_factor(c("setosa", "versicolor", "virginica"))
    )

### Dates and times

One of the most helpful features of readr is its ability to import dates and date times. It can automatically recognise the following formats:

  * Dates in year-month-day form: `2001-10-20` or `2010/15/10` (or any non-numeric separator). It can't automatically recongise dates in m/d/y or d/m/y format because they're ambiguous: is `02/01/2015` the 2nd of January or the 1st of February?

  * Date times as [ISO8601](http://en.wikipedia.org/wiki/ISO_8601) form: e.g. `2001-02-03 04:05:06.07 -0800`, `20010203 040506`, `20010203` etc. I don't support every possible variant yet, so please let me know if it doesn't work for your data (more details in `?parse_datetime`).

If your dates are in another format, don't despair. You can use `col_date()` and `col_datetime()` to explicit specify a format string. Readr implements it's own `strptime()` equivalent which supports the following format strings:

  * Year: `\%Y` (4 digits). `\%y` (2 digits); 00-69 -> 2000-2069, 70-99 -> 1970-1999.

  * Month: `\%m` (2 digits), `\%b` (abbreviated name in current locale), `\%B` (full name in current locale).

  * Day: `\%d` (2 digits), `\%e` (optional leading space)

  * Hour: `\%H`

  * Minutes: `\%M`

  * Seconds: `\%S` (integer seconds), `\%OS` (partial seconds)

  * Time zone: `\%Z` (as name, e.g. `America/Chicago`), `\%z` (as offset from UTC, e.g. `+0800`)

  * Non-digits: `\%.` skips one non-digit charcater, `\%*` skips any number of non-digit characters.

  * Shortcuts: `\%D` = `\%m/\%d/\%y`, `\%F` = `\%Y-\%m-\%d`, `\%R` = `\%H:\%M`, `\%T` = `\%H:\%M:\%S`, `\%x` = `\%y/\%m/\%d`.

To practice parsing date times with out having to load the file each time, you can use `parse_datetime()` and `parse_date()`:

```r
parse_date("2015-10-10")
#> [1] "2015-10-10"
parse_datetime("2015-10-10 15:14")
#> [1] "2015-10-10 15:14:00 UTC"

parse_date("02/01/2015", "%m/%d/%Y")
#> [1] "2015-02-01"
parse_date("02/01/2015", "%d/%m/%Y")
#> [1] "2015-01-02"
```

## Problems

If there are any problems parsing the file, the `read_` function will throw a warning telling you how many problems there are. You can then use the `problems()` function to access a data frame that gives information about each problem:

```r
csv <- "x,y
1,a
b,2
"

df <- read_csv(csv, col_types = "ii")
#> Warning: 2 problems parsing literal data. See problems(...) for more
#> details.
problems(df)
#>   row col   expected actual
#> 1   1   2 an integer      a
#> 2   2   1 an integer      b
df
#>    x  y
#> 1  1 NA
#> 2 NA  2
```

## Helper functions

Readr also provides a handful of other useful functions:

  * `read_lines()` works the same way as `readLines()`, but is a lot faster.

  * `read_file()` reads a complete file into a string.

  * `type_convert()` attempts to coerce all character columns to their appropriate type. This is useful if you need to do some manual munging (e.g. with regular expressions) to turn strings into numbers. It uses the same rules as the `read_*` functions.

  * `write_csv()` writes a data frame out to a csv file. It's quite a bit faster than `write.csv()` and it never writes row.names. It also escapes `"` embedded in strings in a way that `read_csv()` can read.

## Development

Readr is still under very active development. If you have problems loading a dataset, please try the [development version](https://github.com/hadley/readr), and if that doesn't work, [file an issue](https://github.com/hadley/readr/issues).

