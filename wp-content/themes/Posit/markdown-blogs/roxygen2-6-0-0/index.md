---
title: roxygen2 6.0.0
authors: 
- Hadley Wickham
authormeta: hadley-wickham
date: '2017-02-01'
categories:
- Packages
slug: roxygen2-6-0-0
blogcategories:
- Products and Technology
- Open Source
tags:
- Packages
events: blog
---


roxygen2 6.0.0 is now available on CRAN. roxygen2 helps you document your packages by turning specially formatted inline comments into R's standard Rd format. It automates everything that can be automated, and provides helpers for sharing documentation between topics. Learn more at <http://r-pkgs.had.co.nz/man.html>. Install the latest version with:

```r
install.packages("roxygen2")
```

There are two headline features in this version of roxygen2:

  * Markdown support.

  * Improved documentation inheritance.

These are described in detail below.

This release also included many minor improvements and bug fixes. For a full list of changes, please see [release notes](https://github.com/klutometis/roxygen/releases/tag/v6.0.0). A big thanks to all the contributors to this release: [@dlebauer](https://github.com/dlebauer), [@fmichonneau](https://github.com/fmichonneau), [@gaborcsardi](https://github.com/gaborcsardi), [@HenrikBengtsson](https://github.com/HenrikBengtsson), [@jefferis](https://github.com/jefferis), [@jeroenooms](https://github.com/jeroenooms), [@jimhester](https://github.com/jimhester), [@kevinushey](https://github.com/kevinushey), [@krlmlr](https://github.com/krlmlr), [@LiNk-NY](https://github.com/LiNk-NY), [@lorenzwalthert](https://github.com/lorenzwalthert), [@maxheld83](https://github.com/maxheld83), [@nteetor](https://github.com/nteetor), [@shrektan](https://github.com/shrektan), [@yutannihilation](https://github.com/yutannihilation)

## Markdown

Thanks to the hard work of [Gabor Csardi](http://gaborcsardi.org/) you can now write roxygen2 comments in markdown. While we have tried to make markdown mode as backward compatible as possible, there are a few cases where you will need to make some minor changes. For this reason, you'll need to explicitly opt-in to markdown support. There are two ways to do so:

  * Add `Roxygen: list(markdown = TRUE)` to your `DESCRIPTION` to turn it on everywhere.

  * Add `@md` to individual roxygen blocks to enable for selected topics.

roxygen2's markdown dialect supports inline formatting (bold, italics, code), lists (numbered and bulleted), and a number of helpful link shortcuts:

  * `[func()]`: links to a function in the current package, and is translated to `\code{\link[=func]{func()}.`

  * `[object]`: links to an object in the current package, and is translated to `\link{object}.`

  * `[link text][object]`: links to an object with custom text, and is translated to `\link[=link text]{object}`

Similarly, you can link to functions and objects in other packages with `[pkg::func()]`, `[pkg::object]`, and `[link text][pkg::object]`. For a complete list of syntax, and how to handle common problems, please see `vignette("markdown")` for more details.

To convert an existing roxygen2 package to use markdown, try <https://github.com/r-pkgs/roxygen2md>. Happy markdown-ing!

## Improved inheritance

Writing documentation is challenging because you want to reduce duplication as much as possible (so you don't accidentally end up with inconsistent documentation) but you don't want the user to have to follow a spider's web of cross-references. This version of roxygen2 provides more support for writing documentation in one place then reusing in multiple topics.

The new `@inherit` tag allows to you inherit parameters, return, references, title, description, details, sections, and seealso from another topic. `@inherit my_fun` will inherit everything; `@inherit my_fun return params` will allow to you inherit specified components. `@inherits fun sections` will inherit all sections; if you'd like to inherit a single section, you can use `@inheritSection fun title`. You can also inherit from a topic in another package with `@inherit pkg::fun`.

Another new tag is `@inheritDotParams`, which allows you to automatically generate parameter documentation for `...` for the common case where you pass `...` on to another function. The documentation generated is similar to the style used in `?plot` and will eventually be incorporated in to RStudio's autocomplete. When you pass along `...` you often override some arguments, so the tag has a flexible specification:

  * `@inheritDotParams foo` takes all parameters from `foo()`.

  * `@inheritDotParams foo a b e:h` takes parameters `a`, `b`, and all parameters between `e` and `h`.

  * `@inheritDotParams foo -x -y` takes all parameters except for `x` and `y`.

All the `@inherit` tags (including the existing `@inheritParams`) now work recursively, so you can inherit from a function that inherited from elsewhere.

If you want to generate a basic package documentation page (accessible from `package?packagename` and `?packagename`), you can document the special sentinel value `"_PACKAGE"`. It automatically uses the title, description, authors, url and bug reports fields from the `DESCRIPTION`. The simplest approach is to do this:

```r
#' @keywords internal
"_PACKAGE"
```

It only includes what's already in the DESCRIPTION, but it will typically be easier for R users to access.

