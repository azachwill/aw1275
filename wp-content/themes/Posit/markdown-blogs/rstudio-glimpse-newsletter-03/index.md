---
title: rstudio::glimpse() Newsletter
date: '2022-09-29'
slug: rstudio-glimpse-newsletter-03
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
<br>
This is our third rstudio::glimpse() newsletter. If you're reading this on the blog, you can <a href="https://pages.rstudio.net/glimpse.html" target = "_blank">subscribe here</a> to receive this newsletter in your inbox.
</div>

So many new learning resources have been created this month! There’s information on tools, deploying models, Quarto presentations and blogs, neat tables and so much more. I love how these show so many different types of things you can do, because with code, so much is possible. That combination of learning what you can do, and the ‘how-tos’ of creation, give us the ability to use data to answer the questions we have. I’m so excited to see everyone continue to explore what’s possible. 

See more in the newsletter and follow along at <a href="https://twitter.com/rstudio_glimpse" target = "_blank">@rstudio_glimpse</a>!

<h2>Roundup</h2>

<ul>

<li>Just a reminder, <strong>RStudio is becoming Posit in October</strong>! In J.J.Allaire and Hadley Wickham’s <a href="https://www.rstudio.com/blog/rstudio-is-becoming-posit/" target = "_blank">blog post</a> and <a href="https://www.rstudio.com/conference/2022/keynotes/rstudio-2022-beyond/" target = "_blank">rstudio::conf(2022) keynote</a>, they share our mission and why Posit is the right name for this new phase in RStudio’s development. 

<li><strong>Shiny for Python (alpha) is out!</strong> If you’ve heard about it and want to give it a try, here’s a <a href="https://www.rstudio.com/blog/get-started-with-shiny-for-python/" target = "_blank">Getting Started with Shiny for Python blog post</a> and videos from Winston Chang. You can get started without any need for installation using the<a href="https://shinylive.io/py/examples/" target = "_blank"> interactive examples</a> in your browser. It’s hard to convey how much I love being able to learn and try out Shiny in the browser! It’s so amazing, you just have to try it, and please <a href="https://github.com/rstudio/py-shiny/issues" target = "_blank">share any feedback</a>.   

<li><strong><a href="https://rstudio.github.io/shinyuieditor/" target = "_blank">{shinyuieditor}</a> now has support for tabs.</strong> The {shinyuieditor} is a visual tool for building the UI portion of a Shiny application that generates clean and human-readable code. Tabs was an oft-repeated feature request, so we're super excited for you to try it out. Check out this <a href="https://rstudio.github.io/shinyuieditor/articles/ui-editor-live-demo.html" target = "_blank">live demo of tabs</a>.

<li><strong>What language does your team use for machine learning?</strong> The goal of <a href="https://vetiver.rstudio.com/" target = "_blank">{vetiver}</a> is to provide fluent tooling to version, deploy, and monitor a trained model, and it’s built for both R and Python. <a href="https://juliasilge.github.io/mlops-rstudio-meetup/" target = "_blank">Get an intro</a> to {vetiver} with Julia Silge and Isabel Zimmerman, learn how to <a href="https://vetiver.rstudio.com/learn-more/deploy-with-docker.html" target = "_blank">deploy {vetiver} with Docker</a> and see a <a href="https://www.youtube.com/watch?v=5s7fI4cl2C8" target = "_blank">video example</a> too. You can even <a href="https://www.rstudio.com/blog/update-your-machine-learning-pipeline-with-vetiver-and-quarto/" target = "_blank">update your machine learning pipeline</a> with {vetiver} and Quarto.

<li><strong>All the new things for tables. </strong>gt, which makes easily create presentation-ready tables, <a href="https://www.rstudio.com/blog/all-new-things-in-gt-0-7-0/" target = "_blank">has a new release</a> that provides a new Word table output format, makes it easier to create colorful and stylish tables, improves accessibility for HTML tables, and more! If you’re creating any type of table and haven’t tried out <a href="https://gt.rstudio.com/" target = "_blank">{gt}</a> yet, give it a try.

<li><strong>ICYMI, some updates in our Pro tools</strong>. <a href="https://www.rstudio.com/blog/publishing-your-own-binary-packages-with-rspm-2022-07/" target = "_blank">RStudio Package Manager 2022.07</a> now lets you publish your own binary packages and AWS recently shared some new information on <a href="https://aws.amazon.com/sagemaker/rstudio/" target = "_blank">using RStudio Workbench with Amazon SageMaker</a>. 
</ul>

<h2>Learn. Teach. Share.</h2>

<ul>

<li><strong>Participate in <a href="https://www.rstudio.com/blog/rstudio-table-contest-2022/" target = "_blank">the Table Contest</a>! </strong>Tables are an important way to convey information, and the Table Contest celebrates great data display tables. Share your best work, learn from others, and get stickers for your hard work. This year, you can submit Python tables too.

<li><strong>Learn more about Quarto</strong>. Learn how to <a href="https://www.youtube.com/watch?v=hbf7Ai3jnxY" target = "_blank">create beautiful reports and presentations with Quarto</a> with Tom Mock and <a href="https://www.youtube.com/watch?v=CVcvXfRyfE0" target = "_blank">build a blog with Quarto</a> with Isabella Velásquez.

<li><strong>Need enhanced safety when dealing with time? </strong>If you’re handling complexity with time in your code, such as timezones or invalid date issues, <a href="https://clock.r-lib.org/" target = "_blank">{clock}</a> is an R package that has some complementary features to {lubridate} and aims to provide comprehensive and safe handling of date-times Learn more from <a href="https://www.tidyverse.org/blog/2022/09/its-about-time/" target = "_blank">Davis Vaughan’s lightning talk</a>. 

<li><strong>Learn some tips and tricks!</strong> Learn how to make your R Markdown document <a href="https://www.rstudio.com/blog/r-markdown-tips-tricks-4-looks-better-works-better/">look and work better</a> from Brendan Cullen, Alison Hill and Isabella Velásquez and how to <a href="https://rviews.rstudio.com/2022/09/02/looking-at-cash-flows/">look at cash flows in R</a> from Dr. Maria Prokofieva.

<li><strong>Find upcoming RStudio community events</strong>.  Events are on the <a href="http://rstd.io/community-events" target = "_blank">community events calendar</a>, and you can read more about our regular events in the <a href="https://www.rstudio.com/blog/rstudio-community-monthly-events-roundup-september-2022/" target = "_blank">Community Monthly Events Roundup</a>.

<li><strong>We’re <a href="https://www.tidyverse.org/blog/2022/09/devrel-hiring-2022/" target = "_blank">hiring in Developer Relations</a>!</strong> If you’re interested in coding, education & advocacy, apply to work with us & help users learn and flourish!
</ul>
<h2>Selected Releases</h2>

<a href="https://pins.rstudio.com/news/index.html#pins-103" target = "_blank">pins 1.0.3</a>
<br>
The <a href="https://pins.rstudio.com/" target = "_blank">{pins}</a> package publishes data, models, and other R objects, making it easy to share them across projects and with your colleagues. This is a minor release, but has some nice improvements. arrow is now suggested (instead of imported) for easier installation if you are not using arrow and there is better support for {pins} on AWS.
</p>
<p>
<a href="https://www.tidyverse.org/blog/2022/09/bundle-0-1-0/" target = "_blank">bundle 0.1.0</a>
<br>
We’re thrilled to announce the first release of <a href="https://rstudio.github.io/bundle/" target = "_blank">{bundle}</a>. The {bundle} package provides a consistent interface to capture all information needed to serialize a model, situate that information within a portable object, and restore it for use in new settings.
</p>
<p>
<h3>tidyverse</h3>

<a href="https://github.com/r-lib/cli/releases/tag/v3.4.0" target = "_blank">cli 3.4.0</a>
<br>
<a href="https://cli.r-lib.org/" target = "_blank">{cli}</a> is a suite of tools to build attractive command line interfaces (CLIs), from semantic elements: headers, lists, alerts, paragraphs, etc. Improved vector collapsing behavior and more in this release.
</p>
<p>
<a href="https://github.com/r-lib/lifecycle/releases/tag/v1.0.2" target = "_blank">lifecycle 1.0.2</a>
<br>
The <a href="https://lifecycle.r-lib.org/" target = "_blank">{lifecycle}</a> package provides a set of tools and conventions to manage the life cycle of your exported functions. This release adds support for using arbitrary text in a deprecation message by wrapping <code>what</code> or <code>with</code> in <code>I()</code>.
</p>
<p>
<a href="https://github.com/r-lib/rlang/releases/tag/v1.0.6" target = "_blank">rlang 1.0.5</a>
<br>
<a href="https://rlang.r-lib.org/" target = "_blank">{rlang}</a> is a collection of frameworks and APIs for programming with R. This release fixes backtrace errors you might have seen.
</p>
<p>
<h3>tidymodels</h3>

<a href="https://github.com/tidymodels/bonsai/releases/tag/v0.2.0" target = "_blank">bonsai 0.2.0</a>
<br>
A new release of <a href="https://bonsai.tidymodels.org/" target = "_blank">{bonsai}</a>, a package extending tidymodels support for tree-based models, is now on CRAN.  v0.2.0 greatly improves support for LightGBM, a gradient boosting framework.
</p>
<p>
<a href="https://www.tidyverse.org/blog/2022/09/brulee-0-2-0/" target = "_blank">brulee 0.2.0</a>
<br>
We’re thrilled to announce the release of {brulee} 0.2.0. <a href="https://tidymodels.github.io/brulee/" target = "_blank">{brulee}</a> contains several basic modeling functions that use the torch package infrastructure, such as: neural networks, linear regression, logistic regression, and multinomial regression.
</p>
<h2>Wrapping Up</h2>

Thank you for reading our third rstudio::glimpse() newsletter! 

<a href="https://pages.rstudio.net/glimpse.html" target = "_blank">Subscribe here to receive this newsletter in your inbox.</a>

I’d love to hear from you what you think and what you might like to see in this newsletter! Comment in RStudio Community and follow along at our <a href="https://twitter.com/rstudio_glimpse" target = "_blank">@rstudio_glimpse</a> Twitter account too.

And finally: 

<details><summary>How do trees get on computers?</summary>They log on.</details>
