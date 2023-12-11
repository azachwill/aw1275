---
title: Design patterns for action buttons
authors: 
- Garrett Grolemund
authormeta: garrett-grolemund
date: '2015-04-07'
categories:
- Shiny
tags:
- Article
- Shiny
slug: design-patterns-for-action-buttons
blogcategories:
- Products and Technology
- Open Source
events: blog
---


![action-button](https://rstudioblog.files.wordpress.com/2015/04/action-button.png)

Action buttons can be tricky to use in Shiny because they work differently than other widgets. Widgets like sliders and select boxes maintain a value that is easy to use in your code. But the value of an action button is arbitrary. What should you do with it? Did you know that you should almost always call the value of an action button from `observeEvent()` or `eventReactive()`?

The newest article at the [Shiny Development Center](https://shiny.rstudio.com/articles/action-buttons.html) explains how action buttons work, and it provides five useful patterns for working with action buttons. These patterns also work well with action links.

Read the article [here](https://shiny.rstudio.com/articles/action-buttons.html).

