---
title: Announcing Quarto, a new scientific and technical publishing system
date: '2022-07-28'
slug: announcing-quarto-a-new-scientific-and-technical-publishing-system
tags:
  - quarto
authors:
  - JJ Allaire
description: Today we're excited to announce Quarto, the next generation of R Markdown.
alttext: quarto logo made up of a circle split into four equal parts and the text quarto
blogcategories:
  - Company News and Events
  - Open Source
events: blog
---

Today we're excited to announce <a href="https://quarto.org" target = "_blank">Quarto</a>, a new open-source scientific and technical publishing system. Quarto is the next generation of <a href="https://rmarkdown.rstudio.com" target = "_blank">R Markdown</a>, and has been re-built from the ground up to support more languages and environments, as well as to take what we've learned from 10 years of R Markdown and weave it into a more complete, cohesive whole.
While Quarto is a "new" system, it's important to note that it's highly compatible with what's come before. Like R Markdown, Quarto is also based on <a href="https://yihui.name/knitr" target = "_blank">Knitr</a> and <a href="https://pandoc.org" target = "_blank">Pandoc</a>, and despite the fact that Quarto does some things differently, most existing R Markdown documents can be rendered unmodified with Quarto. Quarto also supports <a href="https://jupyter.org" target = "_blank">Jupyter</a> as an alternate computational engine to Knitr, and can also render existing Jupyter notebooks unmodified.

Some highlights and features of note:

* Choose from multiple computational engines (Knitr, Jupyter, and Observable) which makes it easy to use Quarto with <a href="https://quarto.org/docs/computations/r.html" target = "_blank">R</a>, <a href="https://quarto.org/docs/computations/python.html" target = "_blank">Python</a>, <a href="https://quarto.org/docs/computations/julia.html" target = "_blank">Julia</a>, <a href="https://quarto.org/docs/computations/ojs.html" target = "_blank">Javascript</a>, and many other languages.
* Author documents as plain text markdown or Jupyter notebooks, using a variety of tools including RStudio, VS Code, Jupyter Lab, or any notebook or text editor you like.
Publish high-quality reports, presentations, websites, blogs, books, and journal articles in HTML, PDF, MS Word, ePub, and more.
Write with scientific markdown extensions, including equations, citations, crossrefs, diagrams, figure panels, callouts, advanced layout, and more.

Now is a great time to start learning Quarto as we recently released version 1.0, our first stable release after nearly two years of development. Get started by heading to <a href="https://quarto.org" target = "_blank">https://quarto.org</a>.

If you are a dedicated R Markdown user, fear not, R Markdown is by no means going away! See our <a href="https://quarto.org/docs/faq/rmarkdown.html" target = "_blank">FAQ for R Markdown Users</a> or <a href="https://yihui.org/en/2022/04/quarto-r-markdown/" target = "_blank">Yihui Xie's blog post</a> on Quarto for additional details on the future of R Markdown.

Below we'll go into more depth on why we decided to create a new system as well as talk more about Quarto's support for the Jupyter ecosystem.

## Why a new system?

The goal of Quarto is to make the process of creating and collaborating on scientific and technical documents dramatically better. Quarto combines the functionality of R Markdown, bookdown, distill, xaringan, etc. into a single consistent system with “batteries included” that reflects everything we’ve learned from R Markdown over the past 10 years.

The number of languages and runtimes used for scientific discourse is very large and the Jupyter ecosystem in particular is extraordinarily popular. Quarto is, at its core, multi-language and multi-engine, supporting Knitr, Jupyter, and Observable today and potentially other engines tomorrow.

While R Markdown is fundamentally tied to R, which severely limits the number of practitioners it can benefit, Quarto is RStudio’s attempt to bring R Markdown to everyone! Unlike R Markdown, Quarto doesn’t require or depend on R. Quarto was designed to be multilingual, beginning with R, Python, Javascript, and Julia, with the idea that it will work even for languages that don’t yet exist.

While creating a new system has given us the opportunity for a fresh look at things, we have also tried to be as compatible as possible with existing investments in learning, content, and code. If you know R Markdown well, you already know Quarto well, and many of your documents are already compatible with Quarto.

## Quarto and Jupyter

While the R community has mostly focused on plain text R Markdown for literate programming, the Python community has a very strong tradition of using Jupyter notebooks for interactive computing and the interweaving of narrative, code, and output. With Quarto we are hoping to bring what we've learned about publishing dynamic documents with R to the Jupyter ecosystem.

One compelling benefit of Quarto supporting both Knitr and Jupyter is that you can create websites and books that include content from both systems in a single project. Whether users prefer to author in plain markdown, computational markdown, or Jupyter notebooks, they can all contribute to the same project. Similarly, code written in R, Python, Julia, and other languages can co-exist in the same project. We believe that providing a common set of tools will facilitate collaboration and make it much easier to weave together contributions from diverse participants into a cohesive whole.

We also want to enable the many tools built around Jupyter to have access to state of the art scientific publishing capabilities. A great example of this is some recent work we've done with <a href="https://fast.ai" target = "_blank">https://fast.ai</a> to help integrate Quarto with the <a href="https://nbdev.fast.ai/" target = "_blank">nbdev</a> literate programming system. nbdev enables the development of Python libraries within Jupyter Notebooks, putting all code, tests and documentation in one place. In nbdev 2, library documentation written in notebooks can be used to automatically create a Quarto website for the library with a single function call.

Getting more involved with Jupyter as part of working on Quarto has been a great experience. We're excited to do more with the Jupyter community and to continue supporting the ecosystem as a sponsor of <a href="https://numfocus.org/" target = "_blank">NumFOCUS</a>.

## Learning more

Here are some resources that will help you learn more about Quarto:

* [Get started](https://quarto.org/docs/get-started/) with Quarto by downloading it and following the tutorial for your tool of choice (including[ RStudio](https://quarto.org/docs/get-started/hello/rstudio.html), [VS Code](https://quarto.org/docs/get-started/hello/vscode.html), and[ Jupyter Lab](https://quarto.org/docs/get-started/hello/jupyter.html)).
* See the [User Guide](https://quarto.org/docs/guide/) for articles on everything you can do with Quarto, including adding [interactivity](https://quarto.org/docs/interactive/), using [extensions](https://quarto.org/docs/extensions/) and [custom formats](https://quarto.org/docs/extensions/formats.html), and[ publishing](https://quarto.org/docs/publishing/) to a wide variety of destinations.
* Check out the [Gallery](https://quarto.org/docs/gallery/) for examples of the things you can do with Quarto.
* Watch all of the Quarto talks from this year's [rstudio::conf](https://quarto.org/docs/blog/posts/2022-06-21-rstudio-conf-2022-quarto/)  
* Report any [issues](https://github.com/quarto-dev/quarto-cli/issues) you encounter or [start a discussion](https://github.com/quarto-dev/quarto-cli/discussions) about using Quarto.
* Follow us on Twitter at [@quarto_pub](https://twitter.com/quarto_pub) and[ subscribe](https://quarto.org/docs/blog/) to our blog.

We're excited to begin the journey of making Quarto the very best scientific publishing system we can, and look forward to sharing many more developments in the months and years ahead.

