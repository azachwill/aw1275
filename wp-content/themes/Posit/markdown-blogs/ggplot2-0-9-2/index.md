---
title: ggplot2 0.9.2 has been released!
authors: 
- Hadley Wickham
authormeta: hadley-wickham
date: '2012-09-07'
categories:
- Packages
slug: ggplot2-0-9-2
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

The main changes in this version are to the theming system. There are also a number of enhancements to the theming system that make it easier to [modify themes](https://github.com/wch/ggplot2/wiki/New-theme-system) and we've renamed a number of functions to have more informative names. Your existing code should continue to work, although you may receive warnings about functions that have been deprecated. Replacing them with new versions is easy. Here are the changes you are likely to encounter:

  * `opts()` is deprecated. You can simply replace it with `theme()` in your code.

  * `theme_blank()`, `theme_text()`, `theme_rect()`, `theme_line()`, and `theme_segment()` are deprecated. You can replace them with `element_blank()`, `element_text()`, `element_rect()`, and `element_line()`.

  * Previously, the way to set the title of a plot was `opts(title="Title text")`. In the new version, use `ggtitle("Title text")` or `labs(title="Title text")`.

Other improvements include the addition of `stat_ecdf`, defaulting to the colour bar legend for continuous colour scales, nicer default breaks, better documentation and much more (including many bug fixes). You can read the complete list of changes on the [development site](https://github.com/hadley/ggplot2/blob/ggplot2-0.9.2/NEWS)

