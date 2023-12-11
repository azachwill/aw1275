---
title: Four announcements from rstudio::conf(2022)
date: '2022-08-08'
publishdate: '2022-08-08T08:25:00-07:00'
slug: four-announcements-from-rstudio-conf-2022
tags:
  - rstudio::conf
  - Shiny
  - tidymodels
  - vetiver
  - quarto
authors:
  - Isabella Velásquez
description: rstudio::conf was an eventful four days! This post details some of the bigger announcements from RStudio.
alttext: On the left, four images consisting of the Posit logo, Quarto, Shiny, and tidymodels. On the right, a group of people walk in front of a Posit banner that says Serious Data Science Tools for the Individual, Team, and Enterprise.
blogcategories:
  - Company News and Events
events: blog
og_image: "thumbnail.jpg"
thumbnail: "thumbnail.jpg"
---

What a week! Thank you for a fantastic rstudio::conf(2022). It was so exciting to learn and share with you during these eventful four days.

This post will share some of the big announcements from RStudio. We will highlight amazing packages, resources, and processes shared by others during conf in upcoming posts.

* [RStudio, PBC is changing its name to Posit](#rstudio-pbc-is-changing-its-name-to-posit)
* [Announcing Quarto, a new open-source scientific and technical publishing system](#use-quarto-for-creating-content-with-python-r-julia-and-observable)
* [New developments in the Shiny ecosystem](#new-developments-in-shiny-shiny-for-python-shiny-without-a-server-a-visual-shiny-ui-editor-and-more)
* [Updates from the tidymodels and vetiver teams](#updates-from-the-tidymodels-and-vetiver-teams)

## RStudio, PBC is changing its name to Posit

RStudio is <a href="https://www.rstudio.com/blog/rstudio-is-becoming-posit/" target = "_blank">changing its name to Posit</a>. Our mission is to create free and open source software for *data science, scientific research, and technical communication*. In the decade since RStudio became a company, we’ve learned much about creating a sustainable and organic model for open-source software.

* First is the importance of independence and community. As a Public Benefit Corporation (PBC), we’re legally bound to consider the benefits of our actions on our customers, employees, and the community at large in every decision we make.
* Second is upholding the virtuous cycle. The free and open source tools we build are core productivity tools that anybody can access, regardless of economic means. Our commercial products provide features needed in enterprise settings while enabling us to invest back into our open source tools. We will always respect the difference between these lines of work; we aim not to grow at all costs but to build a company still fulfilling its mission in 100 years.

We also want to impact the practice of science more broadly. For years, RStudio has made R more approachable and usable for millions of users. More recently, we’ve also worked on open source tools for other programming languages, such as reticulate, Quarto, vetiver, and Shiny for Python.

> We are not changing our name because we are changing what we are doing. We are changing our name to reflect what we are already doing. We have been working multilingual for many years. Now, we want to announce that to the world.
> --- Hadley Wickham, Chief Scientist

Our new name tells our multilingual story and reflects our ambitions to make scientific communication better for everyone. With Posit, we’re excited to share what we love about R and RStudio with the wider world.

Read more in <a href="https://www.rstudio.com/blog/rstudio-is-becoming-posit/" target = "_blank">J.J. Allaire and Hadley Wickham’s blog post</a>. RStudio will officially rebrand as Posit in October 2022. Until then, we will continue to do business as RStudio.

## Use Quarto for creating content with Python, R, Julia, and Observable

<a href="https://quarto.org/" target = "_blank">Quarto</a> is a new open-source scientific and technical publishing system that works with R, Python, Julia, Javascript, and many other languages. While R Markdown is fundamentally tied to R, the goal of Quarto is to bring the power and flexibility of R Markdown to everyone. Crucially, Quarto enables Python users who prefer to write code in Jupyter Notebooks or VS Code to enjoy the benefits that R Markdown has brought to R users for years.

With Quarto, you can make websites, books, blogs, and more. The <a href="https://quarto.org/docs/guide/" target = "_blank">User Guide</a> is a resource with detailed walkthroughs of Quarto’s functionality. Check out the <a href="https://quarto.org/docs/gallery/" target = "_blank">Gallery</a> to see examples of what’s possible.

Read more in <a href="https://www.rstudio.com/blog/announcing-quarto-a-new-scientific-and-technical-publishing-system/" target = "_blank">J.J. Allaire’s blog post</a> and join us on August 9th for Tom Mock’s <a href="https://www.youtube.com/watch?v=yvi5uXQMvu4" target = "_blank">Welcome to Quarto workshop</a>.

## New developments in Shiny: Shiny for Python, Shiny without a server, a visual Shiny UI editor, and more

🎂 Happy 10th birthday, Shiny!

Shiny is a framework for building interactive web applications without knowing CSS, HTML, and Javascript. Released ten years ago, it is a powerful tool used across many contexts and industries. R programmers use Shiny to <a href="https://calcat.covid19.ca.gov/cacovidmodels/" target = "_blank">track COVID cases in California</a> and <a href="https://shiny.rstudio.com/gallery/didacting-modeling.html" target = "_blank">teach linear regression</a>. There are conferences dedicated to Shiny, such as Appsilon’s <a href="https://appsilon.com/shiny-conference/" target = "_blank">Shiny Conference</a> earlier this year to Jumping River’s <a href="https://www.jumpingrivers.com/blog/shiny-in-production-conference/" target = "_blank">Shiny in Production</a> event in October. As stated in <a href="https://mastering-shiny.org/preface.html" target = "_blank">Mastering Shiny</a> by Hadley Wickham, “Shiny gives you the ability to pass on some of your R superpowers to anyone who can use the web.”

Presenters at this year’s rstudio::conf unveiled new, exciting developments for Shiny, expanding these superpowers to a larger audience.

### Write Shiny web applications with Python

In his keynote speech, Joe Cheng announced <a href="https://shiny.rstudio.com/py/" target = "_blank">Shiny for Python</a>. Python programmers can now try out Shiny’s approachable, reactive framework to create interactive web apps. 

Currently in alpha, many resources exist for those interested in trying Shiny for Python. <a href="https://shiny.rstudio.com/py/" target = "_blank">The Shiny for Python website</a> provides API documents, examples, and articles. VS Code users can download the <a href="https://marketplace.visualstudio.com/items?itemName=rstudio.pyshiny" target = "_blank">Shiny for Python extension</a> to write and preview apps in the editor. Deployment options include <a href="https://www.rstudio.com/products/connect/" target = "_blank">RStudio Connect</a>, shinyapps.io, Shiny Server Open Source, and static web servers.

Check out the <a href="https://www.youtube.com/watch?v=R0vu3zSdvgM&list=PL9HYL-VRX0oTJtI1dWaT9T827fe7OqFhC" target = "_blank">Shiny for Python YouTube playlist</a> to see it in action.

### Test Shiny applications with shinytest2

Barret Schloerke presented <a href="https://rstudio.github.io/shinytest2/" target = "_blank">shinytest2</a>, a new package on CRAN that leverages the <a href="https://testthat.r-lib.org/" target = "_blank">testthat</a> library for Shiny. Shinytest2 provides regression testing for Shiny applications: users can check existing behavior for consistency over time. Written entirely in R, shinytest2 is a streamlined toolkit for unit testing Shiny applications.

Explore the <a href="https://www.youtube.com/watch?v=7KLv6HdIxvU&list=PL9HYL-VRX0oR_tSCCvpNKBdFtTXfohdTK" target = "_blank">shinytest2 YouTube playlist</a> to get started.

### Use a visual editor for designing Shiny apps

Nick Strayer demonstrated two tools for easier, faster development of Shiny apps:

* <a href="https://github.com/rstudio/gridlayout" target = "_blank">gridlayout</a>, a package that helps you build dashboard layouts using an intuitive table-like declaration format
* <a href="https://rstudio.github.io/shinyuieditor/index.html" target = "_blank">shinyuieditor</a>, a drag-and-drop visual tool for creating and editing the UI of your Shiny app. The editor produces code so that the app is reproducible.

Now, it’s easier than ever for anyone to get started designing Shiny user interfaces, even without detailed knowledge of Shiny’s UI functions or HTML layout.

Watch a <a href="https://www.youtube.com/watch?v=Zac1qdaYNsY" target = "_blank">tour of Shiny UI Editor</a> and a <a href="https://www.youtube.com/watch?v=gYPnLiudtGU" target = "_blank">project walking through how to use the editor</a>.

<script src="https://fast.wistia.com/embed/medias/lvc3v4p834.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:52.08% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_lvc3v4p834 videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>

### Run Shiny without a server

Winston Chang showed how to run “ShinyLive” — Shiny for Python without a server. The application runs on the client with no computational load on the server. This is possible because Python can be compiled to <a href="https://webassembly.org/" target = "_blank">WebAssembly</a> (Wasm), a binary format that can run in the browser. With ShinyLive, you can share Shiny apps with just a URL or deploy them to a static web hosting service.

Winston walks through a <a href="https://www.youtube.com/watch?v=sG2dWWothoM" target = "_blank">Beginner’s Guide to ShinyLive on YouTube</a>. See <a href="https://shinylive.io/py/examples/" target = "_blank">some ShinyLive examples</a> on the Shiny for Python website.

## Updates from the tidymodels and vetiver teams

<a href="https://www.tidymodels.org/" target = "_blank">tidymodels</a> is a collection of R packages for modeling and machine learning using tidyverse principles. It provides users with a consistent, modular, and extensible framework for working with models in R. During their keynote, Julia Silge and Max Kuhn shared how tidymodels helps create ergonomic, effective, and safe code (and announced their new book, <a href="https://www.oreilly.com/library/view/tidy-modeling-with/9781492096474/" target = "_blank">Tidy Modeling with R</a>!).

The tidymodels team also demonstrated several new packages during conf, extending the framework to more areas and applications.

### Deploy and maintain machine learning models with vetiver

Machine learning operations, or MLOps, is a set of practices to deploy and maintain machine learning in production reliably and efficiently. Isabel Zimmerman presented how the new <a href="https://vetiver.rstudio.com/" target = "_blank">vetiver</a> framework provides fluent tooling for MLOps in R and Python.

![Isabel’s slide showing the vetiver workflow where you version, deploy, monitor a model, collect data, understand and clean model, and train and evaluate. Different parts are represented by a cookie. The tools associated with the steps are shown and the vetiver hex sticker is on the left hand side.](images/vetiver.png)
<center><caption><a href="https://isabelizimm.github.io/rstudioconf2022-mlops/#/section" target = "_blank">Slides from Isabel's presentation</a></caption></center>

### Run survival analysis with the censored package

Survival analysis is a statistical procedure for data analysis where the outcome variable of interest is time until an event occurs. Hannah Frick showcased the <a href="https://censored.tidymodels.org/" target = "_blank">censored</a> package, a <a href="https://parsnip.tidymodels.org/" target = "_blank">parsnip</a> extension that provides support for survival analysis in tidymodels. The package offers several models, engines, and prediction types for users.

### Build unsupervised models with the tidyclust package

Unsupervised learning learns patterns and provides insight from untagged data. Emil Hvitfeldt unveiled the <a href="https://emilhvitfeldt.github.io/tidyclust/" target = "_blank">tidyclust</a> package, a reimplementation of tidymodels for clustering models. Users can use the tidy, unified tidymodels framework for unsupervised learning algorithms like k-means clustering.

Follow the tidyverse blog to receive the <a href="https://www.tidyverse.org/blog/2022/07/tidymodels-2022-q2/" target = "_blank">quarterly tidymodels digest</a>.

## Learn more

We have so much more to come. Stay in touch:

* See a preview of our new brand at <a href="https://posit.co/" target = "_blank">posit.co</a>
* <a href="https://www.rstudio.com/blog/subscribe/" target = "_blank">Subscribe to our blog updates</a>
* <a href="https://rstd.io/glimpse-newsletter" target = "_blank">Subscribe to the new open source rstudio::glimpse() newsletter</a>
* <a href="https://www.rstudio.com/blog/rstudio-community-monthly-events-roundup-august-2022/" target = "_blank">Attend an upcoming Data Science Hangout or Enterprise Meetup</a>
