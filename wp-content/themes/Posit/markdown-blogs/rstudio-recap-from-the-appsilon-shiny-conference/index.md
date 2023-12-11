---
title: RStudio Recap From the Appsilon Shiny Conference
date: '2022-07-05'
slug: rstudio-recap-from-the-appsilon-shiny-conference
tags:
  - Shiny
authors:
  - Isabella Velásquez
description: The Appsilon Shiny Conference was an exciting event for Shiny developers worldwide. Speakers from RStudio showcased recent advancements in Shiny technology and answered questions from the community.
alttext: Headshots of Winston Chang, Joe Cheng, Barret Schloerke, and the shinytest2 hex sticker which is looks like a mashup of the Shiny hex and the testthat hex sticker. The text says Appsilon Shiny Conference 2022, hosted by Appsilon with support from RStudio.
blogcategories:
  - Products and Technology
events: blog
---

In April 2022, our Full Service partner <a href="https://appsilon.com/" target = "_blank">Appsilon</a> hosted the first-ever <a href="https://appsilon.com/shiny-conference/" target = "_blank">Shiny Conference</a>. The conference comprised three days of free, online Shiny content ranging from tips and tricks from the experts, to fascinating community case studies, to examples of enterprise scaling solutions. It provided a shared space for Shiny developers worldwide to learn, network, and share their work.

RStudio was proud to have a presence at the Shiny conference. Barret Schloerke, Software Engineer at RStudio, demonstrated shinytest2, a new R package that facilitates the testing of Shiny applications. To close out the conference, Joe Cheng, CTO at RStudio, and Winston Chang, Software Engineer at RStudio, joined a panel with Filip Stachura, CEO and co-founder of Appsilon. Eric Nantz moderated the session, where the panelists shared reflections on Shiny’s past and excitement for Shiny’s future.

Watch the recordings from the Shiny Conference on <a href="https://www.youtube.com/channel/UC6LqpR5qBfNlQp5mVIVsthA" target = "_blank">Appsilon's YouTube channel</a> and read our RStudio recap below.

## How to Test Shiny Applications

We are all too familiar with this Shiny workflow: add some reactivity, click "Run App," experiment in the Viewer, and repeat to make changes. A better alternative is to create unit tests. Unit testing breaks up and checks code to ensure it does what you expect. This means fewer bugs, better code structure, easier restarts, and robustness. For R package developers, the <a href="https://testthat.r-lib.org/" target = "_blank">testthat package</a> provides a framework for unit testing that is easy to learn, use, and integrate with existing workflows.

Barret revealed <a href="https://rstudio.github.io/shinytest2/" target = "_blank">shinytest2</a>, a new package on CRAN that leverages the testthat library for Shiny. Shinytest2 provides regression testing for Shiny applications: testing existing behavior for consistency over time. Written entirely in R, shinytest2 is a streamlined toolkit for unit testing Shiny applications. 

Shiny developers run the `record_test()` function to capture all the events happening in the app and replay them later. Developers can use this saved state to check values. Shinytest2 creates these snapshots with Chromote, a headless Chrome browser, and the `AppDriver` object. Thanks to variant support, users can test regardless of operating systems or R versions.

Barret also highlighted Shiny’s `exportTestValues()` function. `exportTestValues()` exports key-value pairs for an app’s names and reactives when it is in test mode to expose intermediate reactive values without slowing down the app in production.

Learn more about shinytest2 on the <a href="https://rstudio.github.io/shinytest2/" target = "_blank">package website</a>.
<center>
<iframe width="560" height="315" src="https://www.youtube.com/embed/EOVPBN5o8F8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>

## Reflecting on Shiny's Past, Present, and Future

During the Q&A keynote, Joe, Winston, and Filip answered questions from community members. The session explored Shiny’s past and inquired about its present and future.

The panelists shared how the community adds to the Shiny ecosystem. Feedback on existing tools guides new features and functionality. External packages give developers flexibility and make it easier to follow good practices. App creators share their experiences and expand the community’s knowledge base. Over time, this means more debugging tools and better performance for Shiny apps.

The questions delved into other topics. Community members asked about alternative frameworks such as Streamlit and the use of Shiny in enterprise settings. They wondered what the developers would implement differently if they could go back (camel case, anybody?). The panelists also shared insights on the core Shiny development process and the extensive internal testing for backward compatibility.

There were a few shoutouts to <a href="https://rstudio.github.io/bslib/" target = "_blank">bslib</a>, a package that helps developers make beautiful Shiny apps with bootstrap.

What is on the roadmap? As Joe stated during the panel, it is an "incredibly exciting time for our team." Barret, Joe, and Winston will present more on Shiny developments at the upcoming rstudio::conf(). <a href="https://www.rstudio.com/conference/" target = "_blank">Register today!</a>

<center>
<iframe width="560" height="315" src="https://www.youtube.com/embed/sTBDxB46LCs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>

## Learn More

Many thanks to Appsilon for hosting an inspiring conference for Shiny developers worldwide.

* Check out the <a href="https://youtube.com/playlist?list=PLexAKolMzPcrYjGA1PULfm7-P12qjKmPb" target = "_blank">2022 Appsilon Shiny Conference playlist</a>.
* <a href="https://www.rstudio.com/conference/" target = "_blank">Register for rstudio::conf(2022)</a> to hear more from Barret, Joe, Winston, and others from the Shiny community.
* Interested in learning Shiny or advancing your skills? Check out these upcoming workshops at rstudio::conf(2022): 
    * <a href="https://www.rstudio.com/conference/2022/workshops/get-started-shiny/" target = "_blank">Getting Started with Shiny</a>, presented by Colin Rundel
    * <a href="https://www.rstudio.com/conference/2022/workshops/shiny-prod-apps/" target = "_blank">Building Production-Quality Shiny Applications</a>, presented by Eric Nantz
