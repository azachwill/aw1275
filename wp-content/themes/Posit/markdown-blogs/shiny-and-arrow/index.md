---
title: Shiny and Arrow
date: '2022-06-27'
slug: shiny-and-arrow
tags:
  - Shiny
  - Arrow
  - Parquet
  - Data processing
  - process improvement
authors:
  - Michael Thomas
description: A match made in high-performance-web-application heaven.
alttext: The Apache Arrow logo next to the Shiny package hex sticker, with the Shiny hex looking like it's zooming by.
blogcategories:
  - Industry
events: blog
---

<div class="lt-gray-box">
This is a guest post from Michael Thomas, Chief Data Scientist at Ketchbrook Analytics. At Ketchbrook, Michael and his team help businesses gain significant competitive advantages by leveraging data effectively. Keep in touch with Michael on <a href="https://www.linkedin.com/in/michaeljthomas2/" target = "_blank">LinkedIn</a>. 
</div>

Shiny apps are incredible tools for bringing data science to life. They can help communicate your analysis to non-technical stakeholders, or enable self-service data exploration for any audience. At <a href="https://www.ketchbrookanalytics.com" target = "_blank">Ketchbrook Analytics</a>, we care a lot about building  *production-grade* quality Shiny apps; in other words, we strive to ensure that the apps we develop for you will run successfully inside your organization with minimal maintenance. 

Building a working Shiny app that runs on your own laptop can be a tricky process itself! However, there are some additional things you need to consider when taking the next step of *deploying* your app to **production** so that others can reap the benefits of your hard work. One of these considerations is where to *store* the data.

> "Where should the data live? Should we use a database or flat file(s)? Is our data small enough to fit there?"

<center><img src="data_soup.png" alt="Databases and File Storage Formats Floating Together in Data Soup" width="600"></center>

## Storing Your Data

There are *so* many options to choose from when it comes to how you want to store the data behind your Shiny app. Sometimes a traditional database doesn't make sense for your project. Databases can take a while to configure, and if your data isn't relational then a *data lake* approach might be a better option. A **data lake** is just a fancy term for a collection of flat files that are organized in a thoughtful way.

When you think about storing data in flat files, formats like **.csv** or **.txt** probably come to mind. However, as your data becomes *"big"*, transitioning your data to more modern, column-oriented file types (e.g., **.parquet**) can drastically reduce the size of the file containing your data and increase the speed at which other applications can read that data.

### The Benefits of .parquet

First, let's dig a little deeper into the advantages of **.parquet** over **.csv**. The main benefits are:

* smaller file sizes
* improved read speed

The compression and columnar storage format lead to file sizes that are significantly smaller than if that same data were stored in a typical delimited file. From our experience -- and also backed by <a href="https://tomaztsql.wordpress.com/2022/05/08/comparing-performances-of-csv-to-rds-parquet-and-feather-data-types/" target = "_blank">this great blog post by Tomaž Kaštrun</a> -- **.parquet** typically comes in at a little less than half the size of a data-equivalent **.csv**; however, this margin widens even further as the data volume increases. Included in Tomaž's article is this fantastic chart (below) illustrating the read, write, and file size metrics he gathered while experimenting across many different file types and sizes.

<center><img src="read_write_comparison_chart.png" alt="Chart from Tomaž Kaštrun, comparing file type sizes and respective read/write performance" width="600"></center>

Interestingly, **.parquet** files not only store your data, but they also store *data about your data* (i.e., metadata). Information such as minimum & maximum values are stored for each column, which helps make aggregation blazing fast.

Still not sold? Maybe you are wondering, 

> Is ".parquet" a sustainable file format for storing my data, or is it just a fad?

That's a fair question! The last thing we want to do as data scientists is to create more technical debt for our organization. Rest assured, **.parquet** format is not going anywhere -- many production workflows at major organizations are driven by **.parquet** files in a data lake.

<a href="https://voltrondata.com/" target = "_blank">Voltron Data</a> is the company behind **.parquet** format and the greater <a href="https://arrow.apache.org/" target = "_blank">Apache Arrow</a> project. They recently finished their Series A round by <a href="https://voltrondata.com/news/fundinglaunch/" target = "_blank">raising $110 million in funding</a> to continue to develop this technology. Needless to say, we won't be seeing **.parquet** format going away any time soon.

Lastly, unlike **.RDS** files, **.parquet** is a cross-platform file storage format, which means you can work with **.parquet** files from <a href="https://github.com/apache/arrow#powering-in-memory-analytics" target = "_blank">just about any programming language</a> including R. This is where the <a href="https://github.com/apache/arrow/tree/master/r#arrow" target = "_blank">{arrow}</a> package can help.

### The Benefits of {arrow}

The **{arrow}** package provides major benefits:

1. It has the ability to read & write **.parquet** files (among other file types)
2. You can query the data in that file *before* bringing it into an R data frame, using **{dplyr}** verbs, which provides for dramatic speed improvements

The combination of **{arrow}** and **{dplyr}** also results in *lazy evaluation* of your data manipulation statements. This means that your {dplyr} functions build a "recipe" of transformation steps that will only evaluate once you are finally ready to bring the transformed data into memory (through the use of `dplyr::collect()`). Don't take our word for it, though; hear it <a href="https://arrow.apache.org/docs/r/articles/dataset.html" target = "_blank">straight from the Apache Arrow team</a>:

> "...[A]ll work is pushed down to the individual data files, and depending on the file format, chunks of data within the files. As a result, you can select a subset of data from a much larger dataset by collecting the smaller slices from each file -- you don’t have to load the whole dataset in memory to slice from it."

The concept of lazy evaluation with **{dplyr}** is also paramount when performing data manipulations and summaries on data stored in relational databases. The fact that a data science team can leverage those same principles to analyze data stored in **.parquet** files, without having to learn a completely new approach, is another massive benefit!

## How It All Fits Together in Shiny: A Use Case at Ketchbrook Analytics

We have learned that the combination of **{arrow}** + **{dplyr}** + **.parquet** gives us all of the memory-saving benefits we would get from querying a database, but with the simplicity of flat files.

Ketchbrook was developing a Shiny app for a client, for which the relevant data was stored in a large, single **.csv** that was causing two problems:

1. There wasn't enough room for the file on their **shinyapps.io** server
2. Even when run locally, applying filters and aggregations to the data from within the app was slow

After converting the large **.csv** file into **.parquet** format, the data became one-sixth of the size of the original **.csv** -- plenty of room available on the server for the **.parquet** data.

Further, executing `dplyr::filter()` on the already-in-memory **.csv** data was taking quite a few seconds for the app to respond. The conversion of the data to **.parquet** format, coupled with executing the **{dplyr}** functions against an **{arrow}** table (instead of an R data frame), drastically reduced the processing time to less than one second.

To demonstrate this powerful combination of **{shiny}** + **{arrow}**, Ketchbrook Analytics developed an <a href="https://ketchbrookanalytics.shinyapps.io/shiny_arrow/" target = "_blank">example Shiny app</a> and accompanying <a href="https://github.com/ketchbrookanalytics/shiny_arrow" target = "_blank">GitHub repository</a>.

Play around with the app, dive into the code, and try incorporating **{arrow}** into your next Shiny project!

### The Proof is in the Pudding (and the File Size)

For our <a href="https://ketchbrookanalytics.shinyapps.io/shiny_arrow/" target = "_blank">example Shiny app</a>, we created a mock dataset, and stored it in both **.txt** and **.parquet** format. You can create this data yourself by running <a href="https://github.com/ketchbrookanalytics/shiny_arrow/tree/main/data-raw" target = "_blank">these two scripts</a>.

For comparison, let's view the size of the data that's stored in tab-delimited **.txt** file format:

```{{r}}
files <- fs::file_info(
  path = list.files(
    dir, 
    full.names = TRUE
  )
) |> 
  dplyr::select(path, size) |> 
  dplyr::mutate(
    path = fs::path_file(path), 
    file_type = stringr::str_extract(
      string = path, 
      pattern = "[^.]+$"   # extract text after period
    )
  )

files |> 
  dplyr::filter(file_type == "txt") |> 
  knitr::kable()
```
<table>
<thead>
<tr class="header">
<th style="text-align: left;">path</th>
<th style="text-align: right;">size</th>
<th style="text-align: left;">file_type</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td style="text-align: left;">half_of_the_data.txt</td>
<td style="text-align: right;">170M</td>
<td style="text-align: left;">txt</td>
</tr>
<tr class="even">
<td style="text-align: left;">the_other_half_of_the_data.txt</td>
<td style="text-align: right;">170M</td>
<td style="text-align: left;">txt</td>
</tr>
</tbody>
</table>

We can see that the **.txt** files total 339M in size.

Now let's look at the data when stored as **.parquet** file format:

```{{r}}
files |> 
  dplyr::filter(file_type == "parquet") |> 
  knitr::kable()
```
<table>
<thead>
<tr class="header">
<th style="text-align: left;">path</th>
<th style="text-align: right;">size</th>
<th style="text-align: left;">file_type</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td style="text-align: left;">all_of_the_data.parquet</td>
<td style="text-align: right;">158M</td>
<td style="text-align: left;">parquet</td>
</tr>
</tbody>
</table>

Wow! The same dataset is less than half the size when stored as **.parquet** as compared to **.txt**.

### The Need for Speed

We saw the storage savings in action -- now let's take a look at the speed improvements.

As a practical example, let's run a sequence of `dplyr::filter()`, `dplyr::group_by()`, and `dplyr::summarise()` statements against the **.txt** file:

```{{r}}
tic <- Sys.time()

vroom::vroom(
  list.files(
    path = dir, 
    full.names = TRUE, 
    pattern = ".txt$"
  ), 
  delim = "\t"
) |> 
  dplyr::filter(Variable_H > 50) |> 
  dplyr::group_by(Item_Code) |> 
  dplyr::summarise(
    Variable_A_Total = sum(Variable_A)
  )
```
```
# A tibble: 1,000 × 2
   Item_Code Variable_A_Total
   <chr>                <dbl>
 1 A1G740              49453.
 2 A1J731              49481.
 3 A1N838              51610.
 4 A1O339              52633.
 5 A1R990              47588.
 6 A2E381              50823.
 7 A2J681              51575.
 8 A2N118              49840.
 9 A2U328              51106.
10 A2W136              48013.
# … with 990 more rows
```
```{{r}}
toc <- Sys.time()

time_txt <- difftime(toc, tic)

time_txt
```
```
Time difference of 6.38838 secs
```

When run against the **.txt** file, the process takes 6.39 seconds to run.

Now let's try the same **{dplyr}** query against the **.parquet** file:

```{{r}}
tic <- Sys.time()

arrow::open_dataset(
  sources = list.files(
    path = dir, 
    full.names = TRUE, 
    pattern = ".parquet$"
  ), 
  format = "parquet"
) |> 
  dplyr::filter(Variable_H > 50) |>
  dplyr::group_by(Item_Code) |>
  dplyr::summarise(
    Variable_A_Total = sum(Variable_A)
  ) |> 
  dplyr::collect()
```
```
# A tibble: 1,000 × 2
   Item_Code Variable_A_Total
   <chr>                <dbl>
 1 Z8B631              49545.
 2 J8O195              52941.
 3 I5Y383              46572.
 4 O8N416              51525.
 5 I2E912              49862.
 6 D4M22               50317.
 7 L1G322              46862.
 8 C3C179              51791.
 9 N4Q977              49013.
10 L6T273              48561.
# … with 990 more rows
```
```{{r}}
toc <- Sys.time()

time_parquet <- difftime(toc, tic)

time_parquet
```
```
Time difference of 1.975953 secs
```

Wow! It might not seem like much, but the difference between a user having to wait 6.39 seconds for your Shiny app to execute a process versus having to wait 1.98 seconds is incredibly significant from a *user experience* standpoint.

But don't just take our word for it. Make your next Shiny app an **{arrow}**-driven, high-performance experience for your own users!
