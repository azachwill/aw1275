---
title: haven 1.0.0
authors: 
- Hadley Wickham
authormeta: hadley-wickham
date: '2016-10-04'
categories:
- Packages
- tidyverse
slug: haven-1-0-0
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

I'm pleased to announce the release of haven. Haven is designed to faciliate the transfer of data between R and SAS, SPSS, and Stata. It makes it easy to read SAS, SPSS, and Stata file formats in to R data frames, and makes it easy to save your R data frames in to SAS, SPSS, and Stata if you need to collaborate with others using closed source statistical software. Install haven by running:

```{{r}}
install.packages("haven")
```

haven 1.0.0 is a major release, and indicates that haven is now largely feature complete and has been tested on many real world datasets. There are four major changes in this version of haven:

  1. Improvements to the underlying ReadStat library

  2. Better handling of "special" missing values

  3. Improved date/time support

  4. Support for other file metadata.

There were also a whole bunch of other minor improvements and bug fixes: you can see the complete list in the [release notes](http://haven.tidyverse.org/news/index.html#haven-1.0.0).

## ReadStat

Haven builds on top of the [ReadStat](http://github.com/WizardMac/ReadStat/issues) C library by [Evan Miller](http://www.evanmiller.org/). This version of haven includes many improvements thanks to Evan's hard work on ReadStat:

  * Can read binary/Ross compressed SAS files.

  * Support for reading and writing Stata 14 data files.

  * New `write_sas()` allows you to write data frames out to `sas7bdat` files. This is still somewhat experimental.

  * `read_por()` now actually works.

  * Many other bug fixes and minor improvements.

## Missing values

haven 1.0.0 includes comprehensive support for the "special" types of missing values found in SAS, SPSS, and Stata. All three tools provide a global "system missing value", displayed as `.`. This is roughly equivalent to R's `NA`, although neither Stata nor SAS propagate missingness in numeric comparisons (SAS treats the missing value as the smallest possible number and Stata treats it as the largest possible number).

Each tool also provides a mechanism for recording multiple types of missingness:

  * Stata has "extended" missing values, `.A` through `.Z`.

  * SAS has "special" missing values, `.A` through `.Z` plus `._`.

  * SPSS has per-column "user" missing values. Each column can declare up to three distinct values or a range of values (plus one distinct value) that should be treated as missing.

Stata and SAS only support tagged missing values for numeric columns. SPSS supports up to three distinct values for character columns. Generally, operations involving a user-missing type return a system missing value.

Haven models these missing values in two different ways:

  * For SAS and Stata, haven provides `tagged_na()` which extend R's regular `NA` to add a single character label.

  * For SPSS, haven provides `labelled_spss()` that also models user defined values and ranges.

Use `zap_missing()` if you just want to convert to R's regular `NA`s.

You can get more details in the [semantics vignette](http://haven.tidyverse.org/articles/semantics.html).

## Date/times

Support for date/times has substantially improved:

  * `read_dta()` now recognises "%d" and custom date types.

  * `read_sav()` now correctly recognises EDATE and JDATE formats as dates. Variables with format DATE, ADATE, EDATE, JDATE or SDATE are imported as `Date` variables instead of `POSIXct`.

  * `write_dta()` and `write_sav()` support writing date/times.

  * Support for `hms()` has been moved into the [hms](https://github.com/rstats-db/hms) package. Time varibles now have class `c("hms", "difftime")` and a `units`attribute with value "secs".

## Other metadata

Haven is slowly adding support for other types of metadata:

  * Variable formats can be read and written. Similarly to to variable labels, formats are stored as an attribute on the vector. Use `zap_formats()` if you want to remove these attributes.

  * Added support for reading file "label" and "notes". These are not currently printed, but are stored in the attributes if you need to access them.

