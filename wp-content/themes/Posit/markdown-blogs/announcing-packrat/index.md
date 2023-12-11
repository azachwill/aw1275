---
title: Announcing Packrat
authors:
- Jonathan McPherson
authormeta: 
- jonathan-mcpherson
date: '2013-11-14'
categories:
- Packages
slug: announcing-packrat
blogcategories:
- Products and Technology
tags:
- Packages
events: blog
---


We're excited to announce [Packrat](http://rstudio.github.io/packrat/), a new tool for managing the packages your R project depends on.

If you've ever been frustrated by package dependencies, whether juggling the packages needed by your own projects or getting someone else's project to work, Packrat is for you. Similar in spirit to [Bundler](http://bundler.io/), Packrat understands package dependencies and manages them inside a private, project-specific library.

Packrat makes your project more isolated, portable, and reproducible. Because your project's package dependencies travel with it, you control the environment in which your code runs. Your results are easy to duplicate on other machines, whether your own or your collaborators'.

http://vimeo.com/79537844

We built Packrat to help us create self-sufficient R projects for deployment, but we think it has many other use cases. Lots more information, including installation instructions, can be found at the Packrat project page:

[Packrat: Reproducible package management for R](http://rstudio.github.io/packrat/).

If you try it, we'd love to get your feedback. Leave a comment here or post in the [packrat-discuss Google group](https://groups.google.com/forum/#!forum/packrat-discuss).

