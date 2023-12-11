---
title: lubridate 1.2.0 now on CRAN
authors: 
- Garrett Grolemund
authormeta: garrett-grolemund
date: '2012-10-08'
categories:
- Packages
slug: lubridate-1-2-0-now-on-cran
blogcategories:
- Products and Technology
- Open Source
tags:
- Packages
events: blog
---

<blockquote>
<p class="body-md-regular body-sm-regular">
Please note that the information presented in this post reflects the package as it stood when initially released, and may now be outdated. For the most up-to-date information, kindly refer to <https://lubridate.tidyverse.org/>.
</p>
</blockquote>

The latest version of lubridate offers some powerful new features and huge speed improvements. Some areas, such as date parsing are more than 50 times faster. lubridate 1.2.0 also fixes those pesky NA bugs in 1.1.0. Here's some of what you'll find:

Parsers can now handle a wider variety date formats, even within the same vector

```r
dates <- c("January 31, 2010", "2-28-2010", "03/31/2000")
dates <- mdy(dates)
## [1] "2010-01-31 UTC" "2010-02-28 UTC" "2000-03-31 UTC
```

Stamp lets you display dates however you like, by emulating an example date

```r
stamper <- stamp("1 March 1999")
stamper(dates)
[1] "31 January 2010"  "28 February 2010" "31 March 2000"
```

New methods add months without rolling past the end of short months. Its hard to find a satisfactory way to implement addition with months, but the %m+% and %m-% operators provide a new option that wasn't available before.

```r
ymd("2010-01-31") %m+% months(1:3)
[1] "2010-02-28 UTC" "2010-03-31 UTC" "2010-04-30 UTC"
```

lubridate 1.2.0 includes many awesome ideas and patches submitted by lubridate users, so check out what is new. For a complete list of new features and contributors, see the package [NEWS](https://github.com/hadley/lubridate/blob/master/NEWS) file on github.

