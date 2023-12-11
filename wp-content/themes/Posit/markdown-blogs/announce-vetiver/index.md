---
title: Announcing vetiver for MLOps in R and Python
authors: 
- Julia Silge
- Isabel Zimmerman
date: '2022-06-09'
slug: announce-vetiver
blogcategories:
  - Open Source
tags:
  - vetiver
  - python
description: We are thrilled to announce the release of vetiver, a framework for MLOps tasks in R and Python. Use vetiver to version, share, deploy, and monitor a trained model.
alttext: "The vetiver logo next to a circular diagram of the MLOps cycle. In this cycle, we collect data, understand and clean the data, train and evaluate a model, deploy the model, and monitor the deployed model. Monitoring can then lead back to collecting more data."
events: blog
---

We are thrilled to announce the release of [vetiver](https://vetiver.rstudio.com/), a framework for MLOps tasks in R and Python. The goal of vetiver is to provide fluent tooling to **version**, **share**, **deploy**, and **monitor** a trained model.

Data scientists have open source tools that they love using to prepare data for modeling and train models, but there is a lack of fluent open source tooling for MLOps tasks like putting a model in production or monitoring model performance. Using vetiver for MLOps lets you use the tools you are comfortable with for exploratory data analysis and model training/tuning, and provides a flexible framework for the parts of a model lifecycle not served as well by current approaches.

As of today, the vetiver framework supports models trained via [scikit-learn](https://scikit-learn.org/), [PyTorch](https://pytorch.org/), [tidymodels](https://www.tidymodels.org/), [caret](https://topepo.github.io/caret/), [mlr3](https://mlr3.mlr-org.com/), [XGBoost](https://xgboost.readthedocs.io/en/latest/R-package/), [ranger](https://cran.r-project.org/package=ranger), [`lm()`](https://stat.ethz.ch/R-manual/R-patched/library/stats/html/lm.html), and [`glm()`](https://stat.ethz.ch/R-manual/R-patched/library/stats/html/glm.html). We are interested in what other modeling frameworks to support, so please let us know what you would like to use vetiver with!


<h2>Getting started</h2>

You can install the released version of vetiver for R from [CRAN](https://cran.r-project.org/package=vetiver):

```{{r}}
install.packages("vetiver")
```

You can install the released version of vetiver for Python from [PyPI](https://pypi.org/project/vetiver/):

```{{python}}
pip install vetiver
```

See our documentation for more on how to:

- [create a deployable vetiver model](https://vetiver.rstudio.com/get-started/)
- [publish and version your model](https://vetiver.rstudio.com/get-started/version.html)
- [deploy your model as a REST API](https://vetiver.rstudio.com/get-started/deploy.html)


<h2>Why use vetiver?</h2>

The vetiver framework for MLOps tasks is built for data science teams that use R and/or Python, with a native, fluent experience for both. We especially had "bilingual" data science teams in mind as we designed vetiver's approach, enabling teams that use both languages (or an individual who uses both) to deploy models with consistent and unified practices.

The vetiver framework provides data scientists with a first deployment experience that is as painless as possible, while being flexible and extensible for more advanced users. At RStudio, we have experienced how tools that are built to help beginners succeed and do the "right thing" are also typically good tools for data practitioners as they mature and advance. In vetiver specifically, functions handle both recording and checking the model’s input data prototype, to avoid common failure modes when deploying models. Other functions support predicting from a remote API endpoint so that you can treat a deployed model much the same as a local R or Python model in memory.

<h2>Get in touch</h2>

We are so happy about releasing vetiver for R and Python, and we want to know how to make it better. Join our discussion on
RStudio Community to chat with us about deploying your models, and let us know what you would like to see from vetiver!
