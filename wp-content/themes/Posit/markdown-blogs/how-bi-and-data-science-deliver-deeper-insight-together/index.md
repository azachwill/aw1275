---
title: How BI and Data Science Deliver Deeper Insight Together
date: '2022-02-08'
slug: how-bi-and-data-science-deliver-deeper-insight-together
tags:
  - BI Tools
  - Interoperability
  - Code-first
authors:
  - Lou Bajuk
description: Michael Lippis of The Outlook podcast interviewed RStudio's Lou Bajuk to discuss the relationship between data science and business intelligence tools.
alttext: Red and blue liquid-like texture on a black background
blogcategories:
  - Data Science Leadership
events: blog
---

Photo by <a href="https://unsplash.com/@pawel_czerwinski?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Pawel Czerwinski</a> on <a href="https://unsplash.com/s/photos/data?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

Michael Lippis of The Outlook podcast interviewed RStudio’s Lou Bajuk to discuss why RStudio encourages its customers to break down the analytic silos that often exist between data science and business intelligence (BI) teams. During the interview, Michael and Lou examined four main topics:

* [The relationship between BI and data science](#the-relationship-between-bi-and-data-science)
* [Understanding self-service BI tools](#understanding-self-service-bi-tools)
* [Understanding code-first tools](#understanding-code-first-tools)
* [Leveraging the strengths of both worlds](#leveraging-the-strengths-of-both-worlds)

We’ve extracted key parts of the podcast interview below and edited the quotes for clarity and length. You can listen to the full interview on the <a href="https://www.rstudio.com/collections/additional-talks/bi-data-science-deliver-deeper-insights/" target = "_blank">RStudio website</a>.

## The Relationship Between BI and Data Science

<div class="question-quote"><span class="speaker-name">Mike:</span>Do organizations view BI and data science as competitors?</div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>Unfortunately, this is far too often the case. BI and data science share many aspects. They both allow the analytically minded to draw on data from multiple data sources and create rich interactive applications that can be shared with others to improve decision-making.</div>

<div class="no-speaker-quote">Ironically, these common purposes and capabilities often trap the teams that use these tools into being organizational competitors because these different approaches can end up delivering applications that look fairly similar. The nuances of the two approaches can be obscured to decision-makers,  especially to those who hold the budget, and this leads to potential competition between the groups.</div>

<div class="question-quote"><span class="speaker-name">Mike:</span>Should data science complement or augment self-service BI?</div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>Both are important. In the complement approach, organizations use the BI and data science tools separately but side by side. BI tools might be used for widespread reporting where simpler analyses and visualizations are sufficient. Code-first data science tools might be used for specialized or complex activities.</div>

<div class="no-speaker-quote">In the augment approach, organizations use BI and data science tools by directly linking them in various ways. Data science tools might be used to apply more advanced analytic techniques, which can help the BI user focus on what's most important in the data. From the perspective of the data science team, delivering these insights through the organization's BI tool can reach a much broader audience. This can be great for boosting the visibility and perceived value of the work that the team does, as well as increasing the impact of their work.</div>

## Understanding Self-service BI Tools

<div class="question-quote"><span class="speaker-name">Mike:</span>Why are self-service BI tools so widely used?</div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>We like to talk about code-first data science giving data scientists superpowers. Similarly, self-service BI tools give business analysts superpowers. Tools like Tableau or Power BI are widely used because they allow business analysts who might not be comfortable coding to perform analytic tasks, things like exploring and visualizing data where they can apply their knowledge of the business problem at hand.</div>

<div class="no-speaker-quote">Generally, BI tools help support a data-driven organization. When these tools are adopted as a corporate standard, they really help provide a common platform for sharing insights and supporting decision making.</div>

<div class="question-quote"><span class="speaker-name">Mike:</span>Now, what challenges do BI tools present?</div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>There are a few challenges. BI tools can make it difficult to adapt if the underlying data changes as the data transformations that are done there are often obscured in a series of point-and-click actions. While these tools might have a wide range of visualizations and some basic stats tools, they're largely constrained by whatever capabilities their vendors implement.</div>

<div class="no-speaker-quote">Another more subtle and potentially quite serious challenge is that the BI tool can help create uncertain conclusions. Humans are hardwired to see patterns and create explanations for them even if the patterns aren't real. It might be hard to get any conclusion at all because there's not a clear pattern in the data.</div>

<div class="no-speaker-quote">Finally, these tools require skills that aren't easily transferable. Getting the most out of these BI tools, especially creating a reusable analysis, requires pretty specialized skills. If the analyst moves to another organization or if their organization decides not to renew the commercial software because it's expensive, these product-specific skills can be wasted.</div>

## Understanding Code-first Tools

<div class="question-quote"><span class="speaker-name">Mike:</span>When compared with self-service BI tools, what do open-source data science tools using R and Python provide? </div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>One of the biggest things is that users of these tools can draw on the broad spectrum of capabilities contributed by the open-source community. This ensures that the analysts and data scientists always have the right tool for the analytic problem at hand. Another advantage of open-source tools using R and Python is that they're inherently reusable, extensible, and inspectable.</div>

<div class="no-speaker-quote">This is a big reason why RStudio advocates and supports code-first data science: these attributes make it easy to track changes over time using version control, maintain reproducibility, and provide more options for customization.

Open source tools also make it easy to integrate with other analytic frameworks in an organization. We call this interoperability. This helps keep data scientists more productive and ensures the better utilization of all these data resources and computational clusters that IT has spent a lot of effort setting up.</div>

<div class="question-quote"><span class="speaker-name">Mike:</span>What challenges are teams faced with that leverage open-source, code-friendly data science?</div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>The biggest challenge that people typically raise to a code-first approach is that it requires people creating the analysis to have coding skills. While a Shiny application presents an analysis in a way that doesn't require any familiarity with R and Python by the end-user, ultimately these products do require someone familiar with the languages to develop them.</div>

<div class="no-speaker-quote">For these open-source environments, you need some way of managing packages and managing the environments. There's also a lack of native deployment capabilities in R and Python, which often lead to these data science teams creating their own ways of sharing applications with their users. These homegrown solutions can be difficult to develop and maintain over time.

Finally, the lack of native capabilities for security and scalability in the cloud means that these organizations often struggle to support large teams, whether it's on the development side or the deployment side. This often leads to very siloed data science work.</div>

<div class="question-quote"><span class="speaker-name">Mike:</span>Has RStudio done anything to address those open-source challenges?</div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>Absolutely. We are dedicated to the proposition that code-first data science is uniquely powerful and that everyone can learn to code. We support this through our education efforts, our community side, and generally making R easier to learn and use through our open-source projects, like the tidyverse, the set of packages that are focused on making R easier to use.</div>

<div class="no-speaker-quote">Our professional product suite, <a href="https://www.rstudio.com/products/team/" target = "_blank">RStudio Team</a>, provides all the enterprise security and scalability, package management, and centralized administration for both development and deployment environments and delivers all the enterprise features that organizations require. Our hosted offerings, <a href="https://www.rstudio.com/products/cloud/" target = "_blank">RStudio Cloud</a> and <a href="https://www.shinyapps.io/" target = "_blank">shinyapps.io</a>, enable data scientists to develop and deploy data products on the cloud without needing to set up their own infrastructure to do so.</div>

## Leveraging the strengths of both worlds

<div class="question-quote"><span class="speaker-name">Mike:</span>What is a good strategy for matching a data science approach to an application need?</div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>The key is to understand what you're trying to accomplish and what skills and expertise you have to draw on. BI tools provide a lower barrier of entry for someone who may not be comfortable coding in a language like R or Python. However, the questions you are trying to answer get more complex as they require greater analytic depth. Users will encounter a low ceiling to the complexity of the questions they can ask and answer.</div>

<div class="no-speaker-quote">On the other hand, code-first data science tools represent a relatively high barrier to entry for a novice user. They require those who create the analysis to have some understanding of coding and be familiar with how to apply advanced analytic methods. However, the flexibility and analytic breadth of these code-first data science tools combined create a pretty high ceiling to be able to answer difficult, valuable, often vague questions for an organization.</div>

<div class="question-quote"><span class="speaker-name">Mike:</span>Is there a role for data hand-offs in BI and data science collaboration?</div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>Absolutely. This is one of the key ways that organizations augment their BI tools with data science. We define data handoff as a situation where a data set is created by a data scientist or data science team and stored in a database or other data source where it can be shared with BI analysts for visualization in a BI tool. Data scientists create the data, BI tools visualize it.</div>

<div class="no-speaker-quote">These sorts of data hand-offs are vital. Data science teams often work with large messy data from unstructured or novel sources, and then apply advanced analytical methods and statistical rigor to them. And while these teams may create reports and rich interactive applications, they can't hope to address every potential question that might be asked of the data.

By making this preprocessed data available to users of BI tools, including any predictions or calculated features in the data, data scientists can give BI users the ability to explore the data themselves. This increases the visibility and reuse of the data and consequently, the impact of the data science work the team has done.</div>

<div class="question-quote"><span class="speaker-name">Mike:</span>Can you share a use case with the audience?</div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>One of my favorite customer examples is from Monash University in Australia. The director of the strategic intelligence and insight unit was tasked with providing decision support for their executive team. They needed to combine data from a large array of complex data sources for deeper insights.</div>

<div class="no-speaker-quote">So, they used Shiny and RStudio Pro Products to strengthen strategic decision-making. As he described it, they were able to start with the decision they needed to support and then reverse engineer back to what was the data they needed, where was it, and how did it need to be transformed, and what was the interactivity that they needed to deliver to allow their executives to ask and answer the questions they needed.</div>

<div class="no-speaker-quote">They adopted this code-first approach to provide an advanced level of flexibility as well as reproducibility so they could clearly communicate to their executives and support decisions that they needed to make.</div>

<div class="question-quote"><span class="speaker-name">Mike:</span>Where can our audience get more information on RStudio solutions?</div>

<div class="speaker-quote"><span class="speaker-name">Lou:</span>We've done a series of <a href="https://www.rstudio.com/tags/bi-tools/">blog posts</a> that are available on the RStudio blog. Also, I mentioned one customer example here but in the <a href="https://www.rstudio.com/about/customer-stories/">customer section of our website</a>, we also have more examples. That's a great place to learn about how other customers and other organizations have leveraged RStudio tools.</div>

## For More Information

Combining open-source tools like R and self-service business intelligence tools helps organizations get the full value possible out of their data. By avoiding a one-size-fits-all approach, you can develop more agile processes and improve decision-making.

If you’d like to explore other resources related to this article:

* Read about how RStudio's modular platform helps you get the most value out of your analytic investments on our <a href="https://www.rstudio.com/solutions/interoperability/" target = "_blank">Interoperability page</a>.
* Learn more on how to break down your analytic silos and get deeper insights to drive more value from your data on our <a href="https://www.rstudio.com/solutions/bi-and-data-science/" target = "_blank">BI and data science page</a>.
