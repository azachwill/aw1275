---
title: readr 1.0.0
authors: 
- Hadley Wickham
authormeta: hadley-wickham
date: '2016-08-05'
categories:
- Packages
- tidyverse
slug: readr-1-0-0
blogcategories:
- Products and Technology
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

readr 1.0.0 is now available on CRAN. readr makes it easy to read many types of rectangular data, including csv, tsv and fixed width files. Compared to base equivalents like `read.csv()`, readr is much faster and gives more convenient output: it never converts strings to factors, can parse date/times, and it doesn't munge the column names. Install the latest version with:

```r
install.packages("readr")
```

Releasing a version 1.0.0 was a deliberate choice to reflect the maturity and stability and readr, thanks largely to work by Jim Hester. readr is by no means perfect, but I don't expect any major changes to the API in the future.

In this version we:

  * Use a better strategy for guessing column types.

  * Improved the default date and time parsers.

  * Provided a full set of lower-level file and line readers and writers.

  * Fixed many bugs.

## Column guessing

The process by which readr guesses the types of columns has received a substantial overhaul to make it easier to fix problems when the initial guesses aren't correct, and to make it easier to generate reproducible code. Now column specifications are printing by default when you read from a file:

```r
mtcars2 <- read_csv(readr_example("mtcars.csv"))
#> Parsed with column specification:
#> cols(
#>   mpg = col_double(),
#>   cyl = col_integer(),
#>   disp = col_double(),
#>   hp = col_integer(),
#>   drat = col_double(),
#>   wt = col_double(),
#>   qsec = col_double(),
#>   vs = col_integer(),
#>   am = col_integer(),
#>   gear = col_integer(),
#>   carb = col_integer()
#> )
```

The thought is that once you've figured out the correct column types for a file, you should make the parsing strict. You can do this either by copying and pasting the printed column specification or by saving the spec to disk:

```r
# Once you've figured out the correct types
mtcars_spec <- write_rds(spec(mtcars2), "mtcars2-spec.rds")

# Every subsequent load
mtcars2 <- read_csv(
  readr_example("mtcars.csv"),
  col_types = read_rds("mtcars2-spec.rds")
)
# In production, you might want to throw an error if there
# are any parsing problems.
stop_for_problems(mtcars2)
```

You can now also adjust the number of rows that readr uses to guess the column types with `guess_max`:

```r
challenge <- read_csv(readr_example("challenge.csv"))
#> Parsed with column specification:
#> cols(
#>   x = col_integer(),
#>   y = col_character()
#> )
#> Warning: 1000 parsing failures.
#>  row col               expected             actual
#> 1001   x no trailing characters .23837975086644292
#> 1002   x no trailing characters .41167997173033655
#> 1003   x no trailing characters .7460716762579978
#> 1004   x no trailing characters .723450553836301
#> 1005   x no trailing characters .614524137461558
#> .... ... ...................... ..................
#> See problems(...) for more details.
challenge <- read_csv(readr_example("challenge.csv"), guess_max = 1500)
#> Parsed with column specification:
#> cols(
#>   x = col_double(),
#>   y = col_date(format = "")
#> )
```

(If you want to suppress the printed specification, just provide the dummy spec `col_types = cols()`)

You can now access the guessing algorithm from R: `guess_parser()` will tell you which parser readr will select.

```r
guess_parser("1,234")
#> [1] "number"

# Were previously guessed as numbers
guess_parser(c(".", "-"))
#> [1] "character"
guess_parser(c("10W", "20N"))
#> [1] "character"

# Now uses the default time format
guess_parser("10:30")
#> [1] "time"
```

## Date-time parsing improvements:

The date time parsers recognise three new format strings:

  * `%I` for 12 hour time format:

```r
library(hms)
parse_time("1 pm", "%I %p")
#> 13:00:00
```

Note that `parse_time()` returns `hms` from the [hms](https://github.com/rstats-db/hms) package, rather than a custom `time` class

  * `%AD` and `%AT` are "automatic" date and time parsers. They are both slightly less flexible than previous defaults. The automatic date parser requires a four digit year, and only accepts `-` and `/` as separators. The flexible time parser now requires colons between hours and minutes and optional seconds.

```r
parse_date("2010-01-01", "%AD")
#> [1] "2010-01-01"
parse_time("15:01", "%AT")
#> 15:01:00
```

If the format argument is omitted in `parse_date()` or `parse_time()`, the default date and time formats specified in the locale will be used. These now default to `%AD` and `%AT` respectively. You may want to override in your standard `locale()` if the conventions are different where you live.

## Low-level readers and writers

readr now contains a full set of efficient lower-level readers:

  * `read_file()` reads a file into a length-1 character vector; `read_file_raw()` reads a file into a single raw vector.

  * `read_lines()` reads a file into a character vector with one entry per line; `read_lines_raw()` reads into a list of raw vectors with one entry per line.

These are paired with `write_lines()` and `write_file()` to efficient write character and raw vectors back to disk.

## Other changes

  * `read_fwf()` was overhauled to reliably read only a partial set of columns, to read files with ragged final columns (by setting the final position/width to `NA`), and to skip comments (with the `comment` argument).

  * readr contains an experimental API for reading a file in chunks, e.g. `read_csv_chunked()` and `read_lines_chunked()`. These allow you to work with files that are bigger than memory. We haven't yet finalised the API so please use with care, and send us your feedback.

  * There are many otherbug fixes and other minor improvements. You can see a complete list in the [release notes](https://github.com/hadley/readr/releases/tag/v1.0.0).

A big thanks goes to all the community members who contributed to this release: @[antoine-lizee](https://github.com/antoine-lizee), @[fpinter](https://github.com/fpinter), @[ghaarsma](https://github.com/ghaarsma), @[jennybc](https://github.com/jennybc), @[jeroenooms](https://github.com/jeroenooms), @[leeper](https://github.com/leeper), @[LluisRamon](https://github.com/LluisRamon), @[noamross](https://github.com/noamross), and @[tvedebrink](https://github.com/tvedebrink).

