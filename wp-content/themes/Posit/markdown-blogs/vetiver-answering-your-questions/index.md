---
title: 'MLOps with vetiver in Python and R: Answering your questions'
authors: 
- Isabel Zimmerman
date: '2022-10-18'
slug: vetiver-answering-your-questions
blogcategories:
  - Open Source
tags:
  - vetiver
  - python
  - r
description: We’d like to highlight and answer some of the great audience questions asked during the "MLOps with vetiver in Python and R" webinar.
alttext: An image of Julia Silge and Isabel Zimmerman. The text says MLOps with Vetiver in Python and R, Julia Silge & Isabel Zimmerman, RStudio Enterprise Meetup. The RStudio logo is in the lower right-hand corner and the amphora icon is in the top right-hand corner.
events: blog
---

As a follow-up to last month's [MLOps with vetiver in Python and R webinar](https://www.youtube.com/watch?v=oFQANK13-k4), we’d like to highlight and answer some of the great audience questions asked during the session. You can also check out the [demo and slides on the webinar's website](https://juliasilge.github.io/mlops-rstudio-meetup/).


Questions from attendees fell into four main categories:

* [Trying out vetiver](#trying-out-vetiver)
* [How to use APIs for machine learning](#how-to-use-apis-for-machine-learning)
* [Integrations](#integrations)
* [Vetiver and RStudio Connect](#vetiver-and-rstudio-connect)

## Trying out vetiver

**Are the performance metrics customizable?**
Performance metrics are customizable. [Customizing metrics in R](https://juliasilge.com/blog/nyc-airbnb/) requires you to make a custom [yardstick](https://yardstick.tidymodels.org/index.html) metric. Customizing metrics in Python requires you to make a function with a `y_pred` and `y_true` argument for the values predicted by the model and true values, respectively.

**Are all models supported by vetiver?**
R supports [tidymodels](https://www.tidymodels.org/) workflows (including [stacks](https://stacks.tidymodels.org/)), [caret](https://topepo.github.io/caret/), [mlr3](https://mlr3.mlr-org.com/), [XGBoost](https://xgboost.readthedocs.io/en/latest/R-package/), [ranger](https://cran.r-project.org/package=ranger), GAMS fit with [mgcv](https://cran.r-project.org/package=mgcv), [`lm()`](https://stat.ethz.ch/R-manual/R-patched/library/stats/html/lm.html), and [`glm()`](https://stat.ethz.ch/R-manual/R-patched/library/stats/html/glm.html). Python supports [scikit-learn](https://scikit-learn.org/), [PyTorch](https://pytorch.org/), [xgboost](https://xgboost.readthedocs.io/en/stable/python/index.html), and [statsmodels](https://www.statsmodels.org/stable/index.html), but also has the option to deploy any model with user-defined [custom handlers](https://rstudio.github.io/vetiver-python/stable/advancedusage/custom_handler.html).

**Is vetiver for Python as complete as R?**
We have put together a list of [function parity for R and Python](https://vetiver.rstudio.com/learn-more/parity-checklist.html) as a comprehensive overview of the operational parity between R and Python. In general, these two packages have nearly identical implementations. However, we prioritize that the libraries feel idiomatic for the language and serve their community as needed.


## How to use APIs for machine learning

**JSON and APIs can be foreign to those new to model deployment or those with no web development experience. Do you have any advice or resources to share?**
It can be daunting to enter the world of APIs. Luckily, there are great resources to help you get started! Twitter accounts like [@RapidAPI](https://twitter.com/Rapid_API) offer cartoons and bite-sized explanations of how APIs work. Appsilon also has a great article, ["How to Make REST APIs with R: A Beginners Guide to Plumber."](https://appsilon.com/r-rest-api/)

**What is an API? Is there an RStudio product that includes APIs?**
An API, or Application Programming Interface, is a standardized way for machines to communicate with each other. [RStudio Connect](https://www.rstudio.com/products/connect/) is able to host APIs.

## Integrations

**Any way to deploy without RSConnect?**
You can use Docker as a portable way to transport vetiver to a public or private cloud. Vetiver will write basic Dockerfiles for you using [`vetiver_write_docker()` in R](https://rstudio.github.io/vetiver-r/reference/vetiver_write_docker.html) or [`vetiver.write_docker()` in Python](https://rstudio.github.io/vetiver-python/stable/reference/vetiver.write_docker.html).

**Can you pass custom docker images that fit your organization's security, architecture, etc.?**
The Dockerfiles generated by vetiver are well suited to basic deployments, but you are able to edit them to fit your organization's needs.

**Will this work within a GitHub Action workflow?**
Yes, you can schedule tasks through GitHub Actions with vetiver! You can use vetiver Dockerfiles, `plumber.R` files, or `app.py` files just as you would normally in GitHub Actions.

**Does vetiver integrate with mlflow?**
While there are no explicit integrations, these tools are especially made to be flexible and composable, so you can certainly use vetiver alongside mlflow. One way to use these tools together would be to use mlflow for experiment tracking, then put your finalized model into a vetiver API for deployment.

## Vetiver and RStudio Connect

**Do you need to make a Dockerfile if you're deploying to RSConnect?**
Using [`vetiver_deploy_rsconnect()` in R](https://rstudio.github.io/vetiver-r/reference/vetiver_deploy_rsconnect.html) or [`vetiver.deploy_rsconnect()` in Python](https://rstudio.github.io/vetiver-python/stable/reference/vetiver.deploy_rsconnect.html) will allow you to deploy your model directly to Connect, no Dockerfile needed!

**Is there a RSConnect demo where I can see vetiver?**
For folks interested in seeing what data artifacts look like on Connect, check out these links: 
- [versioned model object](https://colorado.rstudio.com/rsc/seattle-housing-pin/)
- [deployed API](https://colorado.rstudio.com/rsc/seattle-housing/)
- [monitoring dashboard](https://colorado.rstudio.com/rsc/seattle-housing-dashboard/) 

You can also see [the Python endpoint used in the demo](https://colorado.rstudio.com/rsc/scooby).


There were so many great questions on API usage, connecting vetiver with other applications, and extending deployment workflows. Thank you for listening to the webinar and reading through this Q&A; you can use the RStudio Community link if you have other questions about vetiver.
