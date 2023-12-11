---
title: Tips for Getting Started With the NFL Big Data Bowl From the 2022 Winners
date: '2022-10-13'
slug: tips-for-getting-started-with-the-nfl-big-data-bowl
tags:
  - sports analytics
authors:
  - Isabella Velásquez
description: The NFL Big Data Bowl is an annual competition that explores statistical innovations in football. The 2022 champions share how to get started with a winning submission.
alttext: An image of the five members of the winning 2022 NFL Big Data Bowl team. The text says RStudio Sports Analytics Meetup NFL Big Data Bowl 2022 Winners discuss the Math behind the Path, Robyn Ritchie, Brendan Kumagai, Ryker Moreau, Elijah Cavan.
blogcategories:
  - Industry
events: blog
---

In 2022, the Denver Broncos opted not to tender an offer to wide receiver Diontae Spencer and instead signed a new return man. The team is missing out. Among his 2020 peers, Diontae Spencer had the best decision-making ability to find and follow the optimal path to the end zone, according to an algorithm created by the 2022 <a href="https://operations.nfl.com/gameday/analytics/big-data-bowl/" target = "_blank">NFL Big Data Bowl</a> winners, Robyn Ritchie, Brendan Kumagai, Ryker Moreau, and Elijah Cavan.

For four years, the NFL Big Data Bowl has invited data scientists to explore statistical innovations in the NFL. Contestants work with <a href="https://nextgenstats.nfl.com/" target = "_blank">Next Gen Stats</a> alongside traditional football data to develop data-driven solutions to a specific challenge. By combining their data science acumen with sports knowledge, participants advance how football is played and coached.

The 2022 NFL Big Data Bowl called on contestants to devise new ways to analyze special teams in the NFL. The 2022 winners focused on quantifying the decision-making ability of the punt returner in each play by constructing an algorithm that determines their optimal path at any given frame. They used data science to answer questions like:

* If you were the punt returner, what should you look for after receiving the punt?
* Are punt returners making good decisions to increase yards (finding optimal gaps, assessing tackle risks, using their teammates, and following the blocks)?
* Who is the "best" returner based on the situation?

During a recent <a href="https://www.meetup.com/rstudio-enterprise-community-meetup/" target = "_blank">RStudio Sports Analytics Meetup</a>, Robyn, Brendan, Ryker, and Elijah discussed their submission, shared their methodology and code, and advised this year's entrants. Watch the full video to learn about the "math behind the path."
<br>
<br>
<center>
<iframe width="650" height="365.625" src="https://www.youtube.com/embed/1sPSvt3wmxs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>

We've summarized tips from the 2022 NFL Big Data Bowl winners on how to get started with the NFL Big Data Bowl, detailed in <a href="https://twitter.com/_RachaelDempsey/status/1569737664563142658" target = "_blank">this Tweet</a> by Meetup organizer Rachael Dempsey. For each tip, we’ve highlighted resources from the team, as well as other leaders in the sports analytics space.

## Form a team with diverse backgrounds and skill sets

The first step in winning the Big Data Bowl is forming a team. While the competition allows individual submissions, the 2022 winners knew there is strength in numbers.

"A key aspect in building a team is having a good variety of backgrounds," states Robyn. A statistician can understand models and the numbers behind them. A computer scientist can optimize code. The mixture of origin stories, skillsets, and departments brings different ideas to the table, enabling better analytics.

The 2022 winners recommend reaching out to others in sports analytics communities to find diverse collaborators. Brendan found his 2021 Big Data Cup teammates on Twitter. He messaged one analyst, who invited a stats person, who contacted someone with a hockey background. They combined their varied skills and won the competition.

Other communities include the <a href="https://sportsdataverse.org/" target = "_blank">SportsDataverse</a>, a community of developers building easy-to-use sports analytics packages and open-source data repositories. Saiem Gilani, Director of Data Science and Engineering for the Houston Rockets, introduced the SportsDataverse in a past RStudio Sports Analytics Meetup:
<br>
<br>
<center>
<iframe width="650" height="365.625" src="https://www.youtube.com/embed/-FuEXMVbh4o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>

## Present data in visual and intuitive ways

The 2022 winners repeatedly mention the importance of presenting data in visual and intuitive ways. Explaining a concept like "optimal path" could be complicated and confusing. Instead, the team used a mix of colors, text, spatial representations, and animation to represent their algorithm:

![](images/image1.gif)

To create these plots, the team recommends packages like <a href="https://ggplot2.tidyverse.org/" target = "_blank">ggplot2</a> and <a href="https://gganimate.com/" target = "_blank">gganimate</a>. "Those packages are just super awesome for making very nice, aesthetically pleasing plots with very little effort," states Brendan.

The team also created a <a href="https://rr-sportsstats.shinyapps.io/path_generator/" target = "_blank">Shiny app</a> to make their work interactive. Users can explore different seasons, receivers, and plays. This allows for quick analysis without additional manual labor on the part of the creators.

![](images/image2.gif)

If you are interested in the intersection of data and design, check out Tegan Bunsu Ashby’s <a href="https://www.rstudio.com/data-science-hangout/" target = "_blank">Data Science Hangout</a> below. As a Senior Software Developer for the Brooklyn Nets, Tegan talks about building applications and visualizations to empower front office decision-making and help win basketball games:
<br>
<br>
<center>
<iframe width="650" height="365.625" src="https://www.youtube.com/embed/OtxU4rc9lUY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>

## Learn from other sports and previous projects

Data science projects from other sports and competitions were a source of inspiration for the 2022 winners. For instance, you can pick up methodology from <a href="https://www.rstudio.com/resources/rstudioconf-2020/r-tidyverse-in-sports/" target = "_blank">hockey</a> and apply that knowledge to football.

Robyn specifically recommends getting comfortable with tracking data, the location-based coordinates of every player and the ball. If you are new to analyzing tracking data using R, Tom Bliss demonstrates how to get started using a previous NFL Big Data Bowl challenge:
<br>
<br>
<center>
<iframe width="650" height="365.625" src="https://www.youtube.com/embed/FggD93l7NmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>

## Be willing to adapt and change paths along the way

With such a broad challenge, how does a team narrow its focus? Start by playing around. "Get a general idea of how the data looks," recommends Ryker.  It might be unglamorous, but histograms and tables give you an idea of what’s possible. Once you find a promising topic, you can run with it (pun intended).

R users have many options for tackling exploratory data analysis. Priyanka Gagneja showcases several in an RStudio Enterprise Meetup:
<br>
<br>
<center>
<iframe width="650" height="365.625" src="https://www.youtube.com/embed/qvFeaPRgOns" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>

The team stated that their submission took a lot of trial and error, and the biggest roadblock was the time it took to run code on the giant datasets. Luckily, the <a href="https://purrr.tidyverse.org/" target = "_blank">purrr</a> and <a href="https://furrr.futureverse.org/" target = "_blank">furrr</a> packages assisted in parallelizing the code. The team could iterate their analysis, even fixing an error they found a few days before the submission deadline.

The increasing volume, variety, and velocity of sports data are both great opportunities and challenges for data scientists working in sports. In a previous RStudio Sports Analytics Meetup, Alok Pattani demonstrates how to use R and Google’s BigQuery to scale analysis of NCAA basketball data:
<br>
<br>
<center>
<iframe width="650" height="365.625" src="https://www.youtube.com/embed/op4Q_z5juZc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>

## Learn more

We thank the 2022 NFL Big Data Bowl winners for presenting at the RStudio Sports Analytics Meetup. Follow them on their social media:

* Robyn Ritchie, Ph.D. Student |[ Linkedin](https://www.linkedin.com/in/robyn-ritchie-513b491b9/) | Twitter: @[RR_SportsStats](https://twitter.com/RR_SportsStats)
* Brendan Kumagai, MSc Student |[ Linkedin](https://www.linkedin.com/in/brendan-kumagai/) | Twitter: @[BrendanKumagai](https://twitter.com/BrendanKumagai)
* Ryker Moreau, MSc Student |[ Linkedin](https://www.linkedin.com/in/ryker-moreau/) | Twitter: @[RMoreau18](https://twitter.com/RMoreau18)
* Elijah Cavan, MSc Student |[ Linkedin](https://www.linkedin.com/in/elijah-cavan-msc-14b0bab1/) | Twitter: @[cavan_elijah](https://twitter.com/cavan_elijah)

Learn more about their winning NFL Big Data Bowl submission:

* <a href="https://www.kaggle.com/code/robynritchie/punt-returns-using-the-math-to-find-the-path" target = "_blank">Kaggle notebook</a>
* <a href="https://github.com/ritchi12/punt_returns_using_the_math_to_find_the_path" target = "_blank">GitHub repository</a>
* <a href="https://rr-sportsstats.shinyapps.io/path_generator/" target = "_blank">Shiny app</a>

Are you interested in showcasing your data science skills to advance the sport of football? Sign up for the <a href="https://www.kaggle.com/competitions/nfl-big-data-bowl-2023" target = "_blank">2023 NFL Big Data Bowl</a>. The challenge has just been released!
