---
title: Make robust, modular dashboards with golem and graveler
date: '2022-04-07'
slug: make-robust-modular-dashboards-with-golem-and-graveler
tags:
  - Shiny
  - BI
authors:
  - Alan Carlson
description: Alan Carlson from Snap Finance describes how his team uses a reproducible workflow to build robust, modular dashboards that streamline onboarding and minimize technical debt.
alttext: A group of people around a table with open laptops while one person points to a white board
blogcategories:
  - Data Science Leadership
  - Industry
events: blog
---

<sup>Photo courtesy of [Pixabay](https://pixabay.com/photos/job-office-team-business-internet-5382501/)</sup>

<div class="lt-gray-box">
This is a guest post from Alan Carlson at Snap Finance. As the Tech Lead for the Business Intelligence (BI) team, Alan's primary focus at Snap is researching, creating, and maintaining methods that help the rest of Snap’s BI Team in their work. From dashboards to visualizations to R code in general, he has built multiple packages and bookdowns that make BI easier to train and to use within the RStudio environment.

Since 2012, Snap has been on a mission to bring flexible, pay-over-time financing options to all consumers. For more information, visit <a href="https://snapfinance.com/" target = "_blank">snapfinance.com</a>.
</div>

Has this ever happened to you? 

You are assigned to maintain a dashboard someone on your team has graciously left you, and the users of this dashboard ask you to add a new feature. Fine, you think. "The data for this dashboard doesn’t look terribly complex. I’ll just step in where so-and-so left off and add that feature easily!"
 
Minutes quickly turn into hours as you realize that the last developer coded an entirely different way than you do. It will take days of refactoring just to understand what their code is trying to do, let alone add a new feature. Eventually, you scrap their entire dashboard and decide to rebuild it.
 
Or perhaps you have incoming hires of fresh developers who have never worked with {shiny} before. Can you trust that the training you have (if any) is sufficient and will prepare them to build production-ready dashboards independently?
 
This was the two-pronged challenge facing our team a few years ago. We needed to completely overhaul old dashboards while also training staff on how to build tools that help drive insights for the company. We quickly realized that we needed to decrease the time spent building dashboard frameworks for our new members and ensure that anyone taking over another dashboard could easily modify them.

<a target="_blank" rel="noopener noreferrer" class="btn btn-primary pl-5 pr-5 mt-4" href="https://www.addevent.com/event/xZ12108850
">Join us live on April 12th
 to hear directly from the Snap Finance team about how they put robust, modular dashboards into practice and ask questions about how you can do the same!
</a>

## Our journey towards a reproducible development workflow

One of the major advantages of open source is the vast community that enables the widespread sharing of knowledge. Community members collaborate to develop tools that help solve problems. Sharing those tools allows others to benefit from their contributions.

Our journey started with <a href="https://engineering-shiny.org/index.html" target = "_blank">{golem}</a>, an open-source package built by the great team at <a href="https://thinkr.fr/" target = "_blank">ThinkR</a>. At a high level, {golem} turns your Shiny dashboards into a package framework and allows you to develop and deploy them exactly as you would an R package. This allows for better documentation, testing, robustness, etc. It’s a wonderful framework for engineering dashboards. However, the concepts themselves can be complex and technical. At the time, we knew this would be hard to explain (and implement) with our new developers.

Building upon the amazing {golem} package, we created a wrapper that abstracts away its technical side and sets defaults for our development workflow. We also set the defaults to include our company branding. We named this new internal package {graveler}.[^Why graveler?]

[^Why graveler?]: But if {golem} is the platonic ideal of how to engineer dashboards, then what comes before it?

    If you know your folklore, golems are animated beings made from inanimate objects. This sounds like what we do as developers: breathe life into our dashboards. However, Golem is also a creature from Nintendo’s Pokémon game franchise. If you are unfamiliar, Pokémon get stronger via evolution and, in Golem’s case, it reaches its final form once you evolve it from a Graveler.

    And with the name finally settled, we could now start on our journey of standardization and replication with {golem}’s devolution: {graveler}.

## Using {graveler} to set up a Shiny dashboard framework

Information on {graveler} can be found in the <a href="https://github.com/ghcarlalan/graveler" target = "_blank">GitHub repository</a>. Install the package using devtools:

``` R
devtools::install_github("ghcarlalan/graveler")
```

A new option appears when you open a new project. You can set your package name, username, and display title in this dialogue box.

Creating this project will include all the files necessary to create your initial dashboard and theming. You will see three open files: `01_dev.R`, `run_dev.R`, and `02_deploy.R`.

<script src="https://fast.wistia.com/embed/medias/qns1frhlv2.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:62.5% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_qns1frhlv2 videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>

The first file sets up the dependencies for deployment. These include the libraries you need to run your dashboard, a `golem.config` system file, an `app.R` file to deploy on RStudio Connect, and a manifest file to use git-backed content within RStudio Connect. You can adjust these to fit your workflow.

Once those steps are taken care of, execute the `run_dev.R` file, create the `golem-config.yml` file, and you will have your very own Shiny dashboard skeleton set up with minimal effort!

<script src="https://fast.wistia.com/embed/medias/own33y25ws.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:62.5% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_own33y25ws videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>

The third file has helper functions we use to add <a href="https://docs.rstudio.com/connect/user/content-settings/#content-vars" target = "_blank">environment variables</a> programmatically to our published work.

To add a new tab / module to your dashboard, you run `graveler::level_up(name = "foo")`. This creates a module for your dashboard that contains sections for your UI and server code. At the bottom of each module, you will see three lines of code that you will copy and paste in their respective system files: `body.R`, `app_server.R`, and `sidebar.R`. The `level_up()` function also creates a `fct` file per {golem}’s recommendation, which incentivizes you to build functions for your dashboard modules to streamline debugging and testing.

From there, it’s just a matter of building modules and publishing with whatever workflow your team uses.

<script src="https://fast.wistia.com/embed/medias/pl819znagu.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:60.83% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_pl819znagu videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>

## Sharing and publishing dashboards with RStudio tools

Here at Snap, we use <a href="https://docs.rstudio.com/connect/user/git-backed/" target = "_blank">RStudio’s Git-backed publishing feature</a> to seamlessly modify dashboards across our team and publish to RStudio Connect. We have two RStudio Connect servers: production and development, which allows us to test features or coding methods without messing with what our stakeholders are seeing. <a href="https://www.rstudio.com/products/package-manager/" target = "_blank">RStudio Package Manager</a> helps us share internally created packages (like {graveler}) and ensure that we all use the same packages/functions for our work.

## Ultimately, we’re spending more time _actually developing_ now

With {graveler}, RStudio Package Manager, and RStudio Connect, developers are spending more time _actually developing_ instead of spending time trying to spin up a Shiny framework. More importantly, they are all building dashboards _the same way_, reducing tech debt and simplifying code review. The ability to bring on new developers, integrate them into our workflow, and have them become almost instant contributors to our BI work with {golem} and {graveler} has been a great advantage to our team, our codebase, and our Sr. Developers’ sanities.
