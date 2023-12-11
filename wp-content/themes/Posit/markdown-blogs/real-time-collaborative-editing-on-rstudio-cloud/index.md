---
title: Real-Time Collaborative Editing on RStudio Cloud
date: '2022-05-23'
slug: real-time-collaborative-editing-on-rstudio-cloud
tags:
  - RStudio Cloud
authors:
  - Robby Shaver
description: We are excited to announce real-time collaborative editing on RStudio Cloud. Users can join the same project, edit code, and immediately see each other’s changes.
alttext: Two screenshot of different RStudio Cloud sessions, background is RStudio blue with the RStudio Cloud logo
blogcategories:
  - Products and Technology
events: blog
---

We are excited to announce real-time collaborative editing on RStudio Cloud! Administrators or moderators of a space can open a project that another user is working on to join that user in the project. Users can edit code and immediately see changes made by others.

<script src="https://fast.wistia.com/embed/medias/irh36tnh77.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:50.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_irh36tnh77 videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><i><caption>Pair Programming <a href="https://bookdown.org/roy_schumacher/r4ds/pipes.html#use-the-pipe" target = "_blank">magrittr pipes</a> Example in RStudio Cloud</caption></i></center>

Collaborative editing is currently a beta feature. If you are a Premium, Instructor, or Organization account holder, you can enable collaborative editing for your account.

## Access and edit an RStudio Cloud project at the same time

Up to five users can now access and edit an RStudio Cloud project in real-time. Entering a project allows users to see who is in the same space. Once a file is saved in the project, users can concurrently edit the script (similar to Google Docs).

As part of the roll out of collaborative editing, the RStudio Cloud team changed the way user files are stored within projects. Specifically, each user that opens a project will be provided with their own private home directory, as well as their own R session state. This was necessary to support multi-user collaborative editing, as well as to enhance the security of user-specific files.

If collaborative editing is enabled, all collaborators on a project will continue to have access to files in the project directory. However, each user will now have their own R session data, which includes console and R command histories and R environment state. As a consequence of this change, Admins or Moderators opening projects belonging to another user in a space will not see the session data from that user.

If collaborative editing is not enabled, users accessing the project will see the same behavior as before. Only a single user can access a project at a time, and all users share the same R session, home directory, history, and environment. Learn more in this <a href="https://community.rstudio.com/t/important-changes-related-to-r-sessions-in-rstudio-projects/136423" target = "_blank">community thread</a>.

## Work together, review code, and resolve issues

Collaborative editing creates a supportive environment for active learning and social interaction. Working on the same project encourages users to work with each other. They have the opportunity to demonstrate skills, brainstorm new techniques, and share best practices.

During a session, users have the opportunity to continuously review code and resolve issues. Programmers can work together to inspect the problem, walk through the debugging process, and try out solutions.

<script src="https://fast.wistia.com/embed/medias/8e87w3z7hb.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:50.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_8e87w3z7hb videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
<center><i><caption>Instructor-Student Project Interaction in RStudio Cloud</caption></i></center>

## Learn more

We hope that RStudio Cloud’s collaborative editing feature is helpful to your work.

* Learn more about <a href="https://www.rstudio.com/products/cloud/" target = "_blank">RStudio Cloud</a>.
* Read <a href="https://rstudio.cloud/learn/whats-new" target = "_blank">what’s new in RStudio Cloud</a> and read more on <a href="https://rstudio.cloud/learn/guide#project-collaborative-editing" target = "_blank">Collaborative Editing</a>.
* Interested in using RStudio Cloud in the classroom? Join Mine Çetinkaya-Rundel & Maria Tackett on July 25-26 at rstudio::conf for **Designing the Data Science Classroom**. This workshop equips educators with concrete information on content, workflows, and infrastructure for introducing modern computation with R and RStudio. Learn more on the <a href="https://www.rstudio.com/conference/2022/workshops/teach-ds/" target = "_blank">workshop page</a>.
