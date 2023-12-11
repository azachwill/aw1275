---
title: Successfully Putting Shiny in Production
date: '2022-04-21'
slug: successfully-putting-shiny-in-production
tags:
  - Shiny
  - Production
  - Connect
authors:
  - Isabella Velásquez
description: In this post, we explore possible challenges to putting Shiny in production and how to overcome them.
alttext: Spotlights on side booms with red and blue colour gels illuminating the backstage of a stage, smoke/haze around the lights.
blogcategories:
  - Products and Technology
  - Data Science Leadership
events: blog
---
<sup>Photo by <a href="https://unsplash.com/@wesleypribadi?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Wesley Pribadi</a> on <a href="https://unsplash.com/">Unsplash</a></sup>

Have you ever created a Shiny app that works great on your computer, but had issues once you shared it with others? This is a common experience for many data scientists. To successfully put an app into "production" — where others need it to be accessible, speedy, safe, and accurate — there are several challenges that we may have to overcome. With the right environment and approach, our Shiny app can smoothly deliver data-driven insights for all users.

This post leans heavily on great talks by <a href="https://www.youtube.com/watch?v=Wy3TY0gOmJw" target = "_blank">Joe Cheng</a> and <a href="https://www.youtube.com/watch?v=dQAyASaH-Jo" target = "_blank">Kelly O’Briant</a> and the book <a href="https://mastering-shiny.org/index.html" target = "_blank">Mastering Shiny</a> by Hadley Wickham. If you want to see more on the topic, please check them out.

## What is Production?

Drawing from Joe Cheng’s talk, when we say putting a Shiny app in production, we mean that users are accessing, running, and relying on your app "with real consequences if things go wrong". For a Shiny app to be successful, it must meet certain criteria:

* It must be "up": our users must be able to access and run the app.
* It must be safe: we do not want unauthorized access to the app or its contents.
* It must be correct: the insights shown must be accurate.
* It must be snappy: even if an app meets the other criteria, users will not use it if they have to wait a long time to generate insights. Our app must be able to handle traffic and use.

For example, California's COVID Assessment Tool (CalCAT) is built on Shiny. The CalCAT team created a public-facing app to serve millions of Californian residents. The team also maintains an internal Shiny app that requires authentication to view confidential data. With RStudio Connect and RStudio Package Manager, they can manage any influx of traffic to keep the app running smoothly.

<script src="https://fast.wistia.com/embed/medias/zrun8ktqx6.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:60.63% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_zrun8ktqx6 videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><caption><a href="https://calcat.covid19.ca.gov/cacovidmodels/" target = "_blank">California COVID Assessment Tool</a></center>

However, even with a proper production environment, various challenges may arise. Let’s explore what these could be.

## Challenges in Putting Shiny in Production

### Cultural

Shiny apps are created by R users. An R user can quickly and iteratively create a Shiny app with no knowledge of HTML, CSS, or JavaScript.

However, since R users are not necessarily software engineers, we may only realize we’re creating a production app when others need to access it regularly. We may not be aware of best practices for putting things in production. Without this awareness, we may not know to ask for the necessary resources or time to improve the performance of our apps.

### Organizational

IT and management may have questions when we try to put Shiny apps into production. Perhaps they had never heard of Shiny before and are unaware of what resources and environment it requires. Related to the challenge listed above, they may not want data scientists to create production artifacts due to security concerns. Regardless of the reasons, we need to make the case for R and Shiny when communicating with these teams.

### Technical

We mentioned that apps need to be up, safe, correct, and snappy. To accomplish this, we need to develop our apps carefully. Data scientists need a process for optimizing their code. This means identifying what needs improvement, understanding what to do next, and testing thoroughly. 

## Tools for Overcoming These Challenges

These challenges play out differently from organization to organization. However, we do have certain tools that can help address cultural, organizational, and technical barriers to putting Shiny in production. 

### A sandbox publishing environment for staging

A "sandbox" should be part of our development infrastructure. The sandbox is a place to stage our work that is identical to our production environment. As opposed to the production environment, this is a spot where we expect (and want!) things to break. This lets us find and work out bugs before putting our app out in the real world.

A sandbox not only provides a low-risk way for developers to see how things would work in production, but it also gives us a way to showcase our skills to management. Once we publish our app to our sandbox, we can demonstrate the Shiny app’s functionality to get approval on the tool.

To highlight an example, the Dutch National Institute for Public Health and the Environment (RIVM) deployed the "Clusterbuster" Shiny app to <a href="https://www.youtube.com/watch?v=9Nn9yjpivlE" target = "_blank">help hundreds of doctors and epidemiologists battle COVID-19 in the Netherlands</a>.

First, everybody needed to agree on a tool. Using a prototype like the one below, the RIVM team showed that Shiny could create an aesthetically pleasing app with a positive user experience. This convinced the IT and management teams to move forward with Shiny.

<script src="https://fast.wistia.com/embed/medias/aj1bckrly2.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:60.63% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_aj1bckrly2 videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><caption><a href="https://rivm.shinyapps.io/clusterbuster/" target = "_blank">Clusterbuster proof of concept example</a> showing synthetic data</caption></center>

<br>

<a href="https://www.rstudio.com/products/connect/" target = "_blank">RStudio Connect</a>, RStudio’s enterprise-level publishing platform, can provide data scientists with a sandbox. Data scientists can create a staged version of their app and decide who has access to test it out. Then, we can publish to a separate Connect environment for production.

### Workflow for developing production-ready Shiny apps

RStudio has various R packages that support the development of production-ready Shiny apps. Data scientists can implement a workflow with these packages to draw on best practices from the software engineering world.

<center><img src="images/image1.png" alt="The shinyloadtest optimization loop showing benchmark, analyze, recommend, and optimize"></center>

<center><caption><a href="https://rstudio.github.io/shinyloadtest/articles/case-study-scaling.html" target = "_blank">The shinyloadtest optimization loop</a></center></caption>

The optimization loop consists of:

* **Benchmarking with shinyloadtest**: With shinyloadtest, we generate realistic but synthetic data to record how our app runs for multiple users at the same time.
* **Analyzing with shinyloadtest and profvis**: Our intuition is not very good at guessing what is slow. Profilers and reports help us find out.
* **Making recommendations based on results:** Based on the analysis, we propose a way to increase the capacity of the app.
* **Optimizing:** Now, we can work on changing our code. This can look many different ways.
  - We can move work out of Shiny. One option is to divide labor by using R Markdown as an ETL process so we are not processing data in the Shiny code itself.
  - We can use other tools at our disposal, such as using <a href="https://arrow.apache.org/docs/python/feather.html" target = "_blank">feather</a> files to read data rather than CSVs.
  - We can cache certain parts of our code. For example, plots are often one of the slowest parts of our app. With plot caching, we can dramatically speed them up.

Once we have completed the loop, we benchmark again to determine if our app is fast enough for our needs.

### Metrics that quantify impact

Ultimately, our goal as data scientists is to communicate insights that drive value to our organization. Once our Shiny app is out there, how do we show that it’s making an impact? We can put numbers behind our work to demonstrate how effectively we're reaching others.

The <a href="https://www.rstudio.com/blog/track-shiny-app-use-server-api/" target = "_blank">RStudio Connect Server API</a> tracks our app’s user activity. We can access data on visits, session duration, and more. Not only that, but we can specify goals that send us an alert when we aren’t doing as expected. Evaluating our app helps us make decisions on how to improve and tailor our users' experience.

We can create a dashboard for stakeholders to explore the API data in real-time. This one shows the most popular apps and most active viewers:

<script src="https://fast.wistia.com/embed/medias/03wpixim0r.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_03wpixim0r videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><caption><a href="https://www.rstudio.com/blog/track-shiny-app-use-server-api/" target = "_blank">Learn more about tracking Shiny app usage</a></caption></center>

Metrics like these help us demonstrate the impact that our app is making. This helps management understand the value of Shiny apps in production.

## Learn More

Want to learn more about how to successfully put Shiny in production?

* Watch the talks from <a href="https://www.youtube.com/watch?v=Wy3TY0gOmJw" target = "_blank">Joe Cheng</a> and <a href="https://www.youtube.com/watch?v=dQAyASaH-Jo" target = "_blank">Kelly O’Briant</a>.
* Read more about the optimization loop in the <a href="https://mastering-shiny.org/performance.html" target = "_blank">Performance chapter of Mastering Shiny</a>.
* Check out the recent webinar presented by Cole Arendt on <a href="https://www.youtube.com/watch?v=0iljqY9j64U" target = "_blank">Shiny usage tracking in RStudio Connect</a>. 

Want to see other examples of Shiny apps in the real world?

* Read how the <a href="https://www.rstudio.com/blog/using-shiny-in-production-to-monitor-covid-19/" target = "_blank">California Department of Public Health created a Shiny app to quickly share data with millions of Californians</a>.
* Explore lessons learned from the <a href="https://www.rstudio.com/blog/how-do-you-use-shiny-to-communicate-to-8-million-people/" target = "_blank">Georgia Institute of Technology on building the COVID-19 Event Risk Assessment Planning Tool</a>.
* Find out how <a href="https://www.rstudio.com/about/customer-stories/janssen-story/" target = "_blank">Janssen Pharmaceuticals built an R-based platform for drug discovery</a>.
* Watch how <a href="https://www.rstudio.com/collections/community/r-in-insurance/" target = "_blank">Aetna/CVS built Shiny apps to compute patient clustering and detect comorbidities</a>.
