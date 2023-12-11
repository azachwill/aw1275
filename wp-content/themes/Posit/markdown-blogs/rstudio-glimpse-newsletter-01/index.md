---
title: rstudio::glimpse() Newsletter
date: '2022-07-14'
slug: rstudio-glimpse-newsletter-01
tags:
  - Glimpse
  - tidyverse
  - Shiny
  - tidymodels
authors:
  - Tracy Teal
description: Welcome to the rstudio::glimpse() newsletter. Get a glimpse into our tools and how to use them.
alttext: The rstudio glimpse logo, made up of the RStudio logo, two colons, and glimpse as an R function, on a background with small drawings of normal distributions, cats, pipes, the R symbol, and other R-related icons.
blogcategories:
  - Open Source
events: blog
---

<div class="lt-gray-box">
Tracy Teal is the Open Source Program Director at RStudio.<br>
</div>

It's the lead up to rstudio::conf(2022), and I'm quickly learning what 'conf-driven development' means. There's a lot going on, and more to come at conf!

I've been here about a year now as the Open Source Program Director, and am excited about what we do everyday. To share that excitement and provide a `glimpse()` into our tools and how to use them, I'm kicking off this newsletter. I'll share highlights, new releases, learning resources and some quick tips and tricks. I hope this helps keep you up to date, learn some things, and have some fun too.

This is my first newsletter, so I'm trying out the format and topic areas. I'd love to hear from you what you think and what you might like to see. Comment in RStudio Community and follow along at our <a href="https://twitter.com/rstudio_glimpse" target = "_blank">@rstudio_glimpse Twitter account</a> too. 

## Roundup

* **[MLOps in R and Python](https://www.tidyverse.org/blog/2022/06/announce-vetiver/).** We’re thrilled to [announce vetiver](https://www.rstudio.com/blog/announce-vetiver/) to provide fluent tooling to version, share, deploy, and monitor a trained model. Using [vetiver](http://vetiver.rstudio.com/) for MLOps lets you use the tools you are comfortable with, in R or Python, for exploratory data analysis and model training/tuning, and provides a flexible framework for the parts of a model lifecycle not served as well by current approaches.
* **[GitHub actions for R developers v2](https://www.tidyverse.org/blog/2022/06/actions-2-0-0/).** The [r-lib/actions repo](https://github.com/r-lib/actions#readme) has a number of reusable actions that perform common R-related tasks that makes continuous integration for R package development easier. [Updates](https://www.tidyverse.org/blog/2022/06/actions-2-0-0/#what-is-new) include simpler workflows, snapshots as artifacts, and more!
* **Try out [case weights in tidymodels](https://www.tidyverse.org/blog/2022/05/case-weights/).** Case weights are non-negative numbers used to specify how much each observation influences the estimation of a model. This has been in the works for awhile, and the tidymodels team would love feedback. 
* **Easier installation for TinyTex and tinytex.** TinyTex and tinytex have [moved GitHub organizations](https://yihui.org/en/2022/05/tinytex-changes/#migrating-to-the-rstudio-org-on-github) to make it safer to build, install, and manage future contributions. TinyTeX users, you can[ install the full TeX Live now](https://yihui.org/en/2022/05/tinytex-full/) if you prefer! It's a few gigabytes and contains all possible LaTeX packages.
* **Need to test a Shiny app?** [shinytest2](https://github.com/rstudio/shinytest2) provides a streamlined toolkit for [unit testing Shiny applications](http://schloerke.com/presentation-2022-04-27-appsilon-shinytest2/#0) and seamlessly integrates with the popular [testthat](https://github.com/r-lib/testthat) framework for unit testing R code. 
* **[rstudio::conf(2022)](https://www.rstudio.com/conference/) is coming July 25th!** See the [full schedule](https://www.rstudio.com/conference/2022/schedule/). There’s still time to [sign up](https://na.eventscloud.com/ereg/newreg.php?eventid=665183&) for in-person workshops or the conference. Head to the [conference page](https://www.rstudio.com/conference/) to participate virtually and watch the live streams. You’ll also be able to catch recordings after the conference. There will be so much for all of us to share with each other! 

## Learn. Teach. Share.

* **Playing games with Shiny.** Dragons, numbers and Shiny, what could be better! Jesse Mostipak and Barret Schloerke [live code some Shiny games](https://www.youtube.com/watch?v=sD39WAZo99A&t=216s). Come for the Shiny games, stay for the awesome example of paired coding. 
* **Wordle with Shiny.** Winston Chang created a Shiny Wordle app, and shows how in this [three-part video](https://www.youtube.com/playlist?list=PL9HYL-VRX0oQnWIeY_ydYBdU76iQ-tchU). I loved it so much, I [created my own](https://www.rstudio.com/blog/shiny-wordle-journey/) too! 
* **Tables. Tables. Tables.** Looking to up your table game, or get started with tables? See the great examples from the [table gallery](https://community.rstudio.com/c/table-gallery/64) and Rich Iannone and Jesse Mostipak’s [amazing tables videos](https://www.youtube.com/playlist?list=PL9HYL-VRX0oR-ISYQHemal6VgxaXHS_GT) including tables battles, making beautiful tables, and new features in [gt](https://gt.rstudio.com/).
* **Torch outside the box.** Sometimes, a software’s best feature is the one you’ve added yourself. See an example of why you [may want to extend torch](https://blogs.rstudio.com/ai/posts/2022-04-27-torch-outside-the-box/), how to proceed, and an [example of torchopt](https://blogs.rstudio.com/ai/posts/2022-05-18-torchopt/).
* **Getting started with deep learning in R.** Announcing the [release of “Deep Learning with R, 2nd Edition,”](https://blogs.rstudio.com/ai/posts/2022-05-31-deep-learning-with-r-2e/) from François Chollet, Tomasz Kalinowski and J. J. Allaire. The book is over a third longer, with more than 75% new content, so basically a new book! It shows you how to get started with deep learning in R, even if you have no background in mathematics or data science.
* **Teaching the tidyverse in 2021.** Mine Çetinkaya-Rundel continues her great series on [teaching the tidyverse](https://www.tidyverse.org/blog/2021/08/teach-tidyverse-2021/) and has tips for folks who might want to update their teaching materials to include the last year’s changes in the tidyverse.

## Highlighted How-To’s

[How I Use Stories to Share Data at Meetings](https://www.rstudio.com/blog/how-i-use-stories-to-share-data-at-meetings/) by Ryan Estrellado. Learn how Ryan more effectively communicates information for data-driven decision making, using the Palmer penguins dataset as an example! 

[R Markdown Tips and Tricks #3: Time-savers and Troubleshooters](https://www.rstudio.com/blog/r-markdown-tips-and-tricks-3-time-savers/) by Brendan Cullen, Alison Hill and Isabella Velásquez. There’s even more in [Part 1: Working in the RStudio IDE](https://www.rstudio.com/blog/r-markdown-tips-tricks-1-rstudio-ide/) and [Part 2: Cleaning up your code](https://www.rstudio.com/blog/r-markdown-tips-tricks-2-cleaning-up-your-code/).

## Selected new releases

<b>[pins for Python](https://www.rstudio.com/blog/pins-for-python/)</b><br>
We’re excited to announce the release of pins for Python! pins removes the hassle of managing data across projects, colleagues, and teams by providing a central place for people to store, version and retrieve data. If you’ve ever chased a CSV through a series of email exchanges, or had to decide between data-final.csv and data-final-final.csv, then pins is for you.

<b>[reticulate 1.25](https://rstudio.github.io/reticulate/news/index.html)</b><br>
The [reticulate](https://rstudio.github.io/reticulate/) package provides a comprehensive set of tools for interoperability between Python and R. New release fixes some issues and has some exception handling changes.

<b>[gt 0.6.0](https://www.rstudio.com/blog/changes-for-the-better-in-gt-0-6-0/)</b><br>
[gt](https://gt.rstudio.com/) 0.6.0 is here, along with several new functions! Join [Rich Iannone ](https://twitter.com/riannone) on a tour of these functions and how they work in [the release video](https://t.co/vD7YUUi5rN).

<b>[distill 1.4](https://github.com/rstudio/distill/releases/tag/v1.4)</b><br>
New release of [distill](https://rstudio.github.io/distill/) fixes some outstanding issues and improves highlighting and code folding.  

<b>[TensorFlow and Keras 2.9](https://blogs.rstudio.com/ai/posts/2022-06-09-tf-2-9/)</b><br>
These releases bring many refinements that allow for more idiomatic and concise R code.

### tidyverse

<b>[dbplyr 2.2.0](https://www.tidyverse.org/blog/2022/06/dbplyr-2-2-0/)</b><br>
[dbplyr](https://dbplyr.tidyverse.org/) is a database backend for dplyr that allows you to use a remote database as if it was a collection of local data frames: you write ordinary dplyr code and dbplyr translates it to SQL for you. This release has improvements to SQL translations and support for dplyr’s `row_` function.

<b>[haven 2.5.0](https://www.tidyverse.org/blog/2022/04/haven-2-5-0/)</b><br>
[haven](https://haven.tidyverse.org/) allows you to read and write SAS, SPSS, and Stata data formats from R, thanks to the wonderful ReadStat C library written by Evan Miller.

<b>[pkgload 1.3.0](https://github.com/r-lib/pkgload/releases/tag/v1.3.0)</b><br>
The goal of [pkgload](https://pkgload.r-lib.org/) is to simulate the process of installing and loading a package, without actually doing the complete process, and hence making package iteration much faster. The main feature in this release is that devtools::load_all() now prompts you to install missing dev deps with pak.

<b>[rig 0.5.0](https://github.com/r-lib/rig/releases)</b><br>
[rig](https://github.com/r-lib/rig) lets you install and manage multiple #rstats versions on macOS, Windows or Linux. Many exciting new features in this and previous releases, including a macOS menu bar app.

<b>[rlang 1.0.4](https://rlang.r-lib.org/news/index.html)</b><br>
[rlang](https://rlang.r-lib.org/) is a collection of frameworks and APIs for programming with R. New releases feature an opt-in new display for backtraces that we are considering enabling by default in the future. This new display shows more frames by default and uses colours to deemphasise the parts that were previously hidden. 

<b>[roxygen2 7.2.0](https://www.tidyverse.org/blog/2022/05/roxygen2-7-2-0/)</b><br>
[roxygen2](https://roxygen2.r-lib.org/) allows you to write specially formatted R comments that generate R documentation files (`man/*.Rd`) and the NAMESPACE file. 

<b>[scales 1.2.0](https://www.tidyverse.org/blog/2022/04/scales-1-2-0/)</b><br>
The [scales](https://scales.r-lib.org/) package provides much of the infrastructure that underlies [ggplot2’s](https://ggplot2.tidyverse.org/) scales, and using it allows you to customize the transformations, breaks, and labels used by ggplot2. 

### tidymodels

<b>[bonsai 0.1.0](https://www.tidyverse.org/blog/2022/06/bonsai-0-1-0/)</b><br>
This is the first release of the bonsai package on CRAN. bonsai is a parsnip extension package for tree-based models.

<b>[censored 0.1.0 ](http://censored.tidymodels.org/)</b><br>
This is a new package! [censored](http://censored.tidymodels.org/) is a parsnip extension package for survival models.

<b>[recipes extension](https://www.tidyverse.org/blog/2022/05/recipes-update-05-20222/)</b><br>
[recipes](https://recipes.tidymodels.org/) is a package for preprocessing data before using it in models or visualizations. You can think of it as a mash-up of model.matrix() and dplyr.

<b>[spatialsample 0.2.0](https://www.tidyverse.org/blog/2022/06/spatialsample-0-2-0/)</b><br>
spatialsample is a package for spatial resampling, extending the rsample framework to help create spatial extrapolation between your analysis and assessment data sets.

<b>[stacks 1.0.0](https://github.com/tidymodels/stacks)</b><br>
stacks is on CRAN, enabling stacked ensemble modeling with tidy data principles. See more in this [short paper on the package published in JOSS](https://joss.theoj.org/papers/10.21105/joss.04471).

### Shiny

<b>[chromote](https://rstudio.github.io/chromote/)</b><br>
chromote is an R implementation of the full Chrome dev tools protocol, providing a headless Chrome Remote Interface. The website has a TON of usage examples!

<b>[shinytest2](https://rstudio.github.io/shinytest2/)</b><br>
shinytest2 provides a streamlined toolkit for unit testing Shiny applications and seamlessly integrates with the popular testthat framework for unit testing R code.

<b>[webshot2](http://rstudio.github.io/webshot2)</b><br>
webshot2 enables you to take screenshots of web pages from R, replacing webshot by using chromote instead of PhantomJS.

## Wrapping Up

Thank you for reading our first rstudio::glimpse() newsletter. Let me know if you have any comments, ideas or suggestions for what you’d like to see in the newsletter by talking about this post on RStudio Community!

And finally:

<details><summary>How do computers like their snacks?</summary>Byte size.</details>
