---
title: Curating Your Data Science Content on RStudio Connect
date: '2022-03-15'
slug: rstudio-connect-data-showcase
tags:
  - RStudio Connect
  - Connect
  - connectwidgets
authors:
  - Isabella Velásquez
description: With RStudio Connect, you can curate data science content to deliver a great experience to your audience.
alttext: Screenshots of various types of content, such as Shiny apps and Jupyter notebook, displayed in HTML widgets.
blogcategories:
  - Products and Technology
events: blog
---

<a href="https://www.rstudio.com/products/connect/" target = "_blank">RStudio Connect</a> is RStudio's publishing platform that hosts data science content created in R or Python, such as R Markdown documents, Shiny apps, Jupyter Notebooks, and more.

As you publish to RStudio Connect, you will want your audience to have a great experience looking through your work. Released in July 2021, the <a href="https://rstudio.github.io/connectwidgets/" target = "_blank">connectwidgets</a> package helps create a custom view of your content. Your projects will be easier to organize, distribute, and discover.

The connectwidgets package queries your Connect server to get information about your published content items. It turns them into HTML widget components that can be displayed either in an R Markdown document or Shiny app.

<script src="https://fast.wistia.com/embed/medias/zqgzo2fbe7.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:53.96% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_zqgzo2fbe7 videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><caption>Example of gallery created by connectwidgets</caption></center>

The Marketing team at RStudio has several pieces of content published on RStudio's Connect server. In this blog post, we'll walk through how we created a project gallery using connectwidgets and R Markdown. View our gallery on <a href="https://colorado.rstudio.com/rsc/rstudio-marketing-content-showcase/" target = "_blank">colorado.rstudio.com</a>!

Want to see connectwidgets in action? Check out Kelly O'Briant's webinar, <a href="https://www.youtube.com/watch?v=GBNzhIkObyE" target = "_blank">Build Your Ideal Showcase of Data Products</a>.

Interested in trying out connectwidgets but don't have RStudio Connect? Log into this <a href="https://beta.rstudioconnect.com/connect/" target = "_blank">evaluation environment</a> to get access to a test server.

## Curate Projects in R Markdown

Let's begin by loading the connectwidgets package:

````
```{{r}}
install.packages("connectwidgets")
library(connectwidgets)
```
````

Open up a template by going to File, New File, R Markdown, From Template, and then selecting the `connectwidgets(HTML)` example.

<script src="https://fast.wistia.com/embed/medias/l1jgjtt0qw.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:62.5% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_l1jgjtt0qw videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><caption>Opening a connectwidgets template</caption></center>

To establish the connection with your RStudio Connect server, add your credentials to your `.Renviron` file:

```
CONNECT_SERVER="https://rsc.company.com/"
CONNECT_API_KEY="mysupersecretapikey"
```

In your R Markdown document, pull in your credential information with the function below:

````
```{{r}}
client <- connect(
  # server  = Sys.getenv("CONNECT_SERVER"),
  # api_key = Sys.getenv("CONNECT_API_KEY")
  )
```
````

The `content()` function retrieves items from your RStudio Connect server and stores them in a tibble.

````
```{{r}}
all_content <- client %>%
  content()
```
````

You can work with the resulting data frame using your usual R tools. For example, you can select items using built-in helper functions or the dplyr package. In this case, we want to filter the dataset to content by certain users:

````
```{{r}}
marketing_content <- all_content %>%
  filter(owner_username %in% c("username1", "username2"))
```
````

## Organize Your Work With HTML Widgets

The package provides organizational components for card, grid, and table views. Each component links to the associated content item in RStudio Connect.

For each chunk, you can select the components that you want to showcase.

### Card View

Cards display your content and associated metadata. You can set the image and the description of your project from the RStudio Connect dashboard.

````
```{{r card}}
marketing_content %>%
  filter(name == "specific_item_name") %>%
  rsc_card()
```
````

<script src="https://fast.wistia.com/embed/medias/ilg7u3ftdp.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:60.42% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_ilg7u3ftdp videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><caption>Connectwidgets card view</caption></center>

### Grid View

Grids allow you to place content in side-by-side tiles. Similar to cards, you can display certain pieces of metadata.

````
```{{r grid-shiny}}
marketing_content %>%
  filter(app_mode == "shiny") %>%
  rsc_grid()
```
````

<script src="https://fast.wistia.com/embed/medias/65z81jgnu3.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:43.96% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_65z81jgnu3 videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><caption>Connectwidgets grid view</caption></center>

### Table View

Would you rather share text? The table component allows you to create a table that shows a fixed set of metadata.

````
```{{r table-plumbertableau}}
marketing_content %>%
  filter(stringr::str_detect(name, "seattle_parking")) %>%
  rsc_table()
```
````

<script src="https://fast.wistia.com/embed/medias/12ww0iswau.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:60.42% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_12ww0iswau videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><caption>Connectwidgets table view</caption></center>

## Customize Your Data Science Gallery's Look

Since connectwidgets is built on R Markdown, you can style your document's colors and fonts. Here, we use the <a href="https://rstudio.github.io/bslib/" target = "_blank">bslib</a> package to customize our gallery's appearance:

```yaml
---
title: "RStudio Marketing Content Gallery"
output:
  html_document:
	theme:
  	bg: "#FFFFFF"
  	fg: "#404040"
  	primary: "#4D8DC9"
  	heading_font:
    	google: "Source Serif Pro"
  	base_font:
    	google: "Source Sans Pro"
  	code_font:
    	google: "JetBrains Mono"
---
```

Add narrative or additional code chunks to give context to your projects.

## Publish to RStudio Connect for Easy Access

Once you're ready, you can publish your document to RStudio Connect.

<script src="https://fast.wistia.com/embed/medias/k5tteubt5z.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_k5tteubt5z videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><caption>Publishing to RStudio Connect</caption></center>

RStudio Connect allows you to update the access settings so that you can share your gallery with others. You can also create a custom vanity URL for your work.

## Learn More

With RStudio Connect, you can publish your data science projects and also deliver a great experience to your audience.

* Learn more about <a href="https://www.rstudio.com/products/connect/" target = "_blank">RStudio Connect</a> and <a href="https://rstudio.github.io/connectwidgets/" target = "_blank">connectwidgets</a>.
* View Kelly O'Briant's webinar, <a href="https://www.youtube.com/watch?v=GBNzhIkObyE" target = "_blank">Build Your Ideal Showcase of Data Products</a>, for an in-depth example of connectwidgets.
* Find out more about tracking the use of your RStudio Connect work by watching Cole Arendt's presentation, <a href="https://www.youtube.com/watch?v=0iljqY9j64U" target = "_blank">Shiny Usage Tracking in RStudio Connect</a>.
