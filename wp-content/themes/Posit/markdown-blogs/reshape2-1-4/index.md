---
title: reshape2 1.4; Kevin Ushey joins Rstudio
authors: 
- Hadley Wickham
authormeta: hadley-wickham
date: '2014-05-09'
categories:
- News
- Packages
slug: reshape2-1-4
blogcategories:
- Products and Technology
- Company News and Events
- Open Source
tags:
- Packages
events: blog
---

<blockquote>
<p class="body-md-regular body-sm-regular">
Please note that the information presented in this post reflects the package as it stood when initially released, and may now be outdated. For the most up-to-date information, kindly refer to <https://tidyr.tidyverse.org/>.
</p>
</blockquote>

reshape2 1.4 is now available on CRAN. This version adds a number of useful arguments and messages, but mostly importantly it gains a C++ implementation of `melt.data.frame()`. This new method should be much much faster (>10x) and does a better job of preserving existing attributes. For full details, see the [release notes](https://github.com/hadley/reshape/releases/tag/v1.4) on github.

The C++ implementation of melt was contributed by [Kevin Ushey](http://kevinushey.github.io/), who we're very pleased to announce has joined RStudio. You may be familiar with Kevin from his contributions to Rcpp, or his CRAN packages Kmisc and timeit.

