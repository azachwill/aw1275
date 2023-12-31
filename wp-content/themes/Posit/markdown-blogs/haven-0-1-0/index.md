---
title: haven 0.1.0
authors: 
- Hadley Wickham
authormeta: hadley-wickham
date: '2015-03-04'
categories:
- Packages
- tidyverse
slug: haven-0-1-0
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
Please note that the information presented in this post reflects the package as it stood when initially released, and may now be outdated. For the most up-to-date information, kindly refer to <https://haven.tidyverse.org/>.
</p>
</blockquote>

I'm pleased to announced that the new haven package is now available on CRAN. Haven makes it easy to read data from SAS, SPSS and Stata. Haven has the same goal as the [foreign](http://cran.r-project.org/package=foreign) package, but it:

  * Can read binary SAS7BDAT files.

  * Can read Stata13 files.

  * Always returns a data frame.

(Haven also has experimental support for writing SPSS and Stata data. This still has some rough edges but please try it out and [report any problems](https://github.com/hadley/haven/issues) that you find.)

Haven is a binding to the excellent [ReadStat](http://github.com/WizardMac/ReadStat/issues) C library by [Evan Miller](http://www.evanmiller.org). Haven wouldn't be possible without his hard work - thanks Evan! I'd also like to thank Matt Shotwell who spend a lot of time reverse engineering the SAS binary data format, and Dennis Fisher who tested the SAS code with thousands of SAS files.

## Usage

Using haven is easy:

  * Install it, `install.packages("haven")`,

  * Load it, `library(haven)`,

  * Then pick the appropriate read function:

    * SAS: `read_sas()`

    * SPSS: `read_sav()` or `read_por()`

    * Stata: `read_dta()`.

These only need the name of the path. (`read_sas()` optionally also takes the path to a catolog file.)

## Output

All functions return a data frame:

  * The output also has class `tbl_df` which will improve the default print method (to only show the first ten rows and the variables that fit on one screen) if you have dplyr loaded. If you don't use dplyr, it has no effect.

  * Variable labels are attached as an attribute to each variable. These are not printed (because they tend to be long), but if you have a [preview version of RStudio](https://www.rstudio.com/products/rstudio/download/preview/), you'll see them in the [revamped viewer pane](https://blog.rstudio.com/2015/02/24/rstudio-v0-99-preview-data-viewer-improvements/).

  * Missing values in numeric variables should be seemlessly converted. Missing values in character variables are converted to the empty string, `""`: if you want to convert them to missing values, use `zap_empty()`.

  * Dates are converted in to `Date`s, and datetimes to `POSIXct`s. Time variables are read into a new class called `hms` which represents an offset in seconds from midnight. It has `print()` and `format()` methods to nicely display times, but otherwise behaves like an integer vector.

  * Variables with labelled values are turned into a new `labelled` class, as described next.

### Labelled variables

SAS, Stata and SPSS all have the notion of a "labelled" variable. These are similar to factors, but:

  * Integer, numeric and character vectors can be labelled.

  * Not every value must be associated with a label.

Factors, by contrast, are always integers and every integer value must be associated with a label.

Haven provides a `labelled` class to model these objects. It doesn't implement any common methods, but instead focusses of ways to turn a labelled variable into standard R variable:

  * `as_factor()`: turns labelled integers into factors. Any values that don't have a label associated with them will become a missing value. (NB: there's no way to make `as.factor()` work with labelled variables, so you'll need to use this new function.)

  * `zap_labels()`: turns any labelled values into missing values. This deals with the common pattern where you have a continuous variable that has missing values indiciated by sentinel values.

If you have a use case that's not covered by these function, please let me know.

## Development

Haven is still under very active development. If you have problems loading a dataset, please try the [development version](https://github.com/hadley/haven), and if that doesn't work, [file an issue](https://github.com/hadley/haven/issues).

