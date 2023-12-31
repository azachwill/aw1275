---
title: ggplot2 updates
authors: 
- Hadley Wickham
authormeta: hadley-wickham
date: '2015-01-09'
categories:
- Packages
slug: ggplot2-updates
blogcategories:
- Products and Technology
- Open Source
tags:
- Packages
events: blog
---

<blockquote>
<p class="body-md-regular body-sm-regular">
Please note that the information presented in this post reflects the package as it stood when initially released, and may now be outdated. For the most up-to-date information, kindly refer to <https://ggplot2.tidyverse.org/>.
</p>
</blockquote>

## ggplot2 1.0.0

As you might have noticed, ggplot2 recently [turned 1.0.0](http://cran.r-project.org/web/packages/ggplot2/index.html). This release incorporated a handful of [new features and bug fixes](https://github.com/hadley/ggplot2/releases/tag/v1.0.0), but most importantly reflects that ggplot2 is now a mature plotting system and it will not change significantly in the future.

This does not mean ggplot2 is dead! The ggplot2 community is [rich](https://groups.google.com/forum/#!forum/ggplot2) and [vibrant](http://stackoverflow.com/tags/ggplot2) and the number of packages that build on top of ggplot2 continues to grow. We are committed to maintaining ggplot2 so that you can continue to rely on it for years to come.

## The ggplot2 book

Since ggplot2 is now stable, and the [ggplot2 book](http://ggplot2.org/book/) is over five years old and rather out of date, I'm also happy to announce that I'm working on a second edition. I'll be ably assisted in this endeavour by [Carson Sievert](http://cpsievert.github.io), who's so far done a great job of converting the source to Rmd and updating many of the examples to work with ggplot2 1.0.0. In the coming months we'll be rewriting the data chapter to reflect modern best practices (e.g. [tidyr](https://github.com/hadley/tidyr) and [dplyr](https://github.com/hadley/dplyr)), and adding sections about new features.

We'd love your help! The source code for the book is available on [github](https://github.com/hadley/ggplot2-book). If you've spotted any mistakes in the first edition that you'd like to correct, we'd really appreciate a [pull request](https://github.com/hadley/ggplot2-book/pulls). If there's a particular section of the book that you think needs an update (or is just plain missing), please let us know by filing an [issue](https://github.com/hadley/ggplot2-book/issues). Unfortunately we can't turn the book into a free website because of my agreement with the publisher, but at least you can now get easily get to the source.

