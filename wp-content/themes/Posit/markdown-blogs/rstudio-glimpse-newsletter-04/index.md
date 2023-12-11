---
title: rstudio::glimpse() Newsletter
author: R package build
date: '2022-10-26'
slug: rstudio-glimpse-newsletter-04
tags:
  - Glimpse
  - tidyverse
  - Shiny
  - tidymodels
  - python
authors:
  - Tracy Teal
description: Welcome to the rstudio::glimpse() newsletter. Get a glimpse into our tools and how to use them.
alttext: The rstudio glimpse logo, made up of the RStudio logo, two colons, and glimpse as an R function, on a background with small drawings of normal distributions, cats, pipes, the R symbol, and other R-related icons.
blogcategories:
  - Open Source
events: blog
---

<div class="lt-gray-box">
This is our  rstudio::glimpse() newsletter. If you're reading this on the blog, you can <a href="https://pages.rstudio.net/glimpse.html" target = "_blank">subscribe here</a> to receive this newsletter in your inbox.
</div>

## Opening

This is our last newsletter as RStudio — the next time this newsletter lands in your inbox, <a href="https://www.rstudio.com/blog/rstudio-is-becoming-posit/" target = "_blank">we’ll be Posit</a>! As with any transition, I’m excited about what’s ahead and also grateful for everything that has led to getting here. We asked employees what the name RStudio meant to them, and of course there was ‘hexagon’, but there was also ‘community’, ‘encouragement’, ‘welcoming’, ‘collaboration’, ‘creativity’, ‘growth’, ‘purpose’, ‘tools’ and ‘open source’. Those are things that won’t change—the who we are and how we work (and the hexagons) — and I can’t wait to see what we create together next. 

## Roundup

* **<a href="https://www.rstudio.com/blog/rstudio-conf-watch-on-youtube/" target = "_blank">rstudio::conf(watch_on = “YouTube”)</a>.** The rstudio::conf(2022) speakers did a fantastic job delivering hours of incredible content over four days. Now catch the <a href="https://www.youtube.com/playlist?list=PL9HYL-VRX0oTOwqzVtL_q5T8MNrzn0mdH" target = "_blank">more than 100 talks on YouTube</a>!
* **Embed <a href="https://quarto.org/docs/blog/posts/2022-10-25-shinylive-extension/" target = "_blank">Shinylive applications in Quarto</a> documents.** With Shinylive, you can embed Shiny for Python applications into Quarto documents and run the entire application (including the Python runtime) inside the user’s web browser.
* **The {shinyuieditor} <a href="https://twitter.com/NicholasStrayer/status/1580929459099615232?s=20&t=vX3KK1JM6-QaZAHHobedOA" target = "_blank">has some new features</a>!** The main changes are the addition of both {plotly} output and {DT} tables. These were the two most frequently requested functions, so it's great to get them out there and enable the editor to handle a broader range of apps!   
* **<a href="https://www.tidyverse.org/blog/2022/10/tidymodels-2022-q3/" target = "_blank">Quarterly tidymodels round up</a>,** featuring upgrades to {agua} and {recipes} and CRAN releases of 22 packages. 
* **<a href="https://www.rstudio.com/blog/community-monthly-events-roundup-november-2022/" target = "_blank">November Community Monthly Events Roundup</a>**. Get information on upcoming events and find the great presentations and talks from last month. 

## Learn. Teach. Share.

* **Playing on the same team as your dependency.** Developing packages for R is a matter of standing on the shoulders of others, and we often rely on dependencies. Thomas Lin Pedersen <a href="https://www.tidyverse.org/blog/2022/09/playing-on-the-same-team-as-your-dependecy/" target = "_blank">talks dependencies</a> and how by taking on a dependency you enter into a mutual relationship with it. 
* **MLOps with vetiver in R and Python, answering your questions.** Isabel Zimmerman and Julia Silge <a href="https://www.rstudio.com/blog/vetiver-answering-your-questions/" target = "_blank">answer the questions</a> you asked about getting started, using APIs for machine learning, integrations and vetiver with RStudio Connect.
* **Learn more about working with R torch.** Excerpts from Sigrid Keydana’s upcoming book “Deep Learning and Scientific Computing with R torch” cover <a href="https://blogs.rstudio.com/ai/posts/2022-10-06-audio-classification-torch/" target = "_blank">audio classification</a>, <a href="https://blogs.rstudio.com/ai/posts/2022-10-13-torch-linalg/" target = "_blank">five ways to do least squares</a> and <a href="https://blogs.rstudio.com/ai/posts/2022-10-20-dft/" target = "_blank">Discrete Fourier Transform</a>.  
* **6 productivity tips for Quarto.** Creating content with Quarto? <a href="https://www.rstudio.com/blog/6-productivity-hacks-for-quarto/" target = "_blank">Learn some tips</a> from Tom Mock and Isabella Velásquez. 
* **RStudio on the road**. We’re running various <a href="https://www.rstudio.com/blog/rstudio-at-r-pharma-2022/" target = "_blank">workshops and sessions at R/Pharma 2022</a>, sign up for this free event! Also, there will be folks from vetiver, Shiny, Quarto and more at <a href="https://pydata.org/nyc2022/" target = "_blank">PyData NYC</a>), Nov 9-11th!
* **Lots of new blog posts!** Learn about <a href="https://www.rstudio.com/blog/translating-shiny-apps-for-international-audiences/" target = "_blank">translating Shiny apps for international audiences</a> from Nicola Rennie, <a href="https://www.rstudio.com/blog/creating-collaborative-bilingual-teams/" target = "_blank">team collaboration in R and Python made easy</a> from Solomon Moon, <a href="https://www.rstudio.com/blog/tips-for-getting-started-with-the-nfl-big-data-bowl/" target = "_blank">tips for getting started with the NFL Big Data Bowl</a> and Julia Silge’s <a href="https://juliasilge.com/blog/stranger-things/" target = "_blank">#TidyTuesday post</a> analyzing data from Stranger Things with {tidytext}.

## Selected Releases

<a href="https://pkgs.rstudio.com/learnr/articles/releases/learnr_v0-11-0.html" target = "_blank">{learnr} v0.11.0</a>
<br>This release collects many large and small improvements to the {learnr} package, all with the goal of making it easier to create interactive tutorials for teaching programming concepts and skills. 

<a href="https://blogs.rstudio.com/ai/posts/2022-10-25-torch-0-9/" target = "_blank">{torch} 0.9.0</a>
<br>We are happy to announce that torch v0.9.0 is now on CRAN. This version adds support for ARM systems running macOS, and brings significant performance improvements. 

### tidyverse

* <a href="https://www.tidyverse.org/blog/2022/10/tidyselect-1-2-0/" target = "_blank">{tidyselect} 1.2.0</a> hit CRAN last week and includes a few updates to the syntax of selections in tidyverse functions like `dplyr::select(...)` and `tidyr::pivot_longer(cols = )`. 
* New versions of <a href="https://lifecycle.r-lib.org/" target = "_blank">{lifecycle}</a>, <a href="https://cpp11.r-lib.org/" target = "_blank">{cpp11}</a>, <a href="https://vroom.r-lib.org/" target = "_blank">{vroom}</a>, <a href="https://readr.tidyverse.org/" target = "_blank">{readr}</a> and <a href="https://ggforce.data-imaginist.com/" target = "_blank">{ggforce}</a> on CRAN in this last month too. 

### Tidymodels

* <a href="https://www.tidyverse.org/blog/2022/10/parsnip-checking-1-0-2/" target = "_blank">{parsnip} 1.0.2</a> release includes improvements to errors and warnings that proliferate throughout the tidymodels ecosystem. These changes are meant to better anticipate common mistakes and nudge users informatively when defining model specifications.   
* See the <a href="https://www.tidyverse.org/blog/2022/10/tidymodels-2022-q3/" target = "_blank">tidymodels quarterly roundup</a> for the full list of recently released packages. 

## Wrapping Up

Thank you for reading our rstudio::glimpse() newsletter!  <a href="https://pages.rstudio.net/glimpse.html" target = "_blank">Subscribe here</a> to receive this newsletter in your inbox. 

I’d love to hear from you what you think and what you might like to see in this newsletter! Comment in RStudio Community and follow along at our <a href="https://twitter.com/rstudio_glimpse" target = "_blank">glimpse Twitter account</a> too.

And finally: 

<details><summary>What’s the best way to learn about computers?
</summary>Bit by bit.</details>
