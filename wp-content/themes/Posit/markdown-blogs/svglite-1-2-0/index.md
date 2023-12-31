---
title: svglite 1.2.0
authors: 
- Hadley Wickham
authormeta: hadley-wickham
date: '2016-11-14'
categories:
- Packages
slug: svglite-1-2-0
blogcategories:
- Products and Technology
- Open Source
tags:
- Packages
events: blog
---


Today we are pleased to release a new version of svglite. This release fixes many bugs, includes new documentation vignettes, and improves fonts support.

You can install svglite with:

```r
install.packages("svglite")
```

## Font handling

Fonts are tricky with SVG because they are needed at two stages:

  * When creating the SVG file, the fonts are needed in order to correctly measure the amount space each character occupies. This is particularly important for plot that use `plotmath`.

  * When drawing the SVG file on screen, the fonts are needed to draw each character correctly.

For the best display, that means you need to have the same fonts installed on both the computer that generates the SVG file and the computer that draws it. By default, svglite uses fonts that are installed on pretty much every computer. svglite's font support is now much more flexible thanks to two new arguments: `system_fonts` and `user_fonts`.

  1. `system_fonts` allows you to specify the name of a font installed on your computer. This is useful, for example, if you'd like to use a font with better CJK support:

```r
svglite("Rplots.svg", system_fonts = list(sans = "Arial Unicode MS"))
plot.new()
text(0.5, 0.5, "正規分布")
dev.off()
```

  2. `user_fonts` allows you to specify a font installed in a R package (like [fontquiver](https://github.com/lionel-/fontquiver)). This is needed if you want to generate identical plot across different operating systems, and are using in the upcoming [vdiffr package](https://github.com/lionel-/vdiffr) which provides graphical unit tests.

For more details, see `vignette("fonts")`.

## Text scaling

This update also fixes many bugs. The most important is that text is now properly scaled within the plot, and we provide a vignette that describes the details: `vignette("scaling")`. It documents, for instance, how to include a svglite graphic in a web page with the figure text consistently scaled with the surrounding text.

Find a full list of changes in the [release notes](https://github.com/hadley/svglite/releases/tag/v1.2.0).

