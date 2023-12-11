---
title: Bring Your Own Binary Packages with RSPM
authors: 
- Joe Roberts 
date: '2022-08-08' 
slug: publishing-your-own-binary-packages-with-rspm-2022-07 
blogcategories: 
- Products and Technology 
tags: 
- RSPM 
- RStudio Package Manager
description: RStudio Package Manager 2022.07 now lets you publish your own binary packages, saving you time and frustration.
alttext: Hexagons over a background of binary digits.
events: blog
---

## Save Time With Binary R Packages on Linux

Installing R packages from source can be a slow process. This is compounded by the challenge of making sure you have all the right system libraries and compilers installed. CRAN eases the burden on most desktop R users by providing pre-built binary packages for both Windows and MacOS, but Linux users (or anyone using a Linux-based environment like Docker) are still expected to build from source.

RStudio comes to the rescue of Linux and Docker users with our free [Public Package Manager](https://packagemanager.rstudio.com) (PPM) service. We provide binary versions of CRAN packages for the most popular Linux distributions, including Ubuntu, Red Hat, and SUSE. Installing these binary packages from PPM can save hours of frustration over building them yourself during installation.

``` r
# install the tidyverse from source
system.time(install.packages("tidyverse", lib=tempdir(), dependencies=TRUE))

#>    user  system elapsed
#> 709.348  41.983 757.044

# set the repository to PPM (Ubuntu focal)
options(repos="https://packagemanager.rstudio.com/all/__linux__/focal/latest");

# install the tidyverse
system.time(install.packages("tidyverse", lib=tempdir(), dependencies=TRUE))

#>    user  system elapsed
#>  22.342   3.898  70.377
```

On a Linux system, installing the entire tidyverse of packages can be much faster than installing from source!

You can start using binary packages from PPM by making a few changes to your R configuration:

1.  Open [packagemanager.rstudio.com](https://packagemanager.rstudio.com) in your favorite web browser.
2.  Click **Get Started**.
3.  Click on **Source** in the upper right corner of the page and select your Linux distribution from the dropdown.
4.  Click the **Setup** button from the top menu and follow the instructions to reconfigure R (or RStudio) to use PPM as your CRAN repository.

**NOTE**: If you are on Linux and not using RStudio, you may need to update your R configuration to support downloading binary packages from PPM. See [R Configuration Steps (Linux)](https://packagemanager.rstudio.com/__docs__/admin/serving-binaries/#binaries-r-configuration-linux) for more details.

## Bring Your Own R Binaries

Using PPM can save you time and frustration for CRAN packages, but what if the package you need isn't available on CRAN? Maybe it's an internally developed package used widely within your own group. Maybe the package is only available on GitHub. Or maybe your organization builds packages only with approved libraries or tools.

For those users, our commercial [RStudio Package Manager](https://www.rstudio.com/products/package-manager/) (RSPM) product may be a solution. With the 2022.07 release, you can now upload custom binary packages for internal, GitHub-only, or otherwise non-CRAN packages and make these binaries available to everyone on your team.

## Publish Packages Remotely

We know many of our customers who maintain their own internal R packages already have systems in place for building and updating them. With the 2022.07 release, RSPM also introduces remote publishing with [API tokens](https://packagemanager.rstudio.com/__docs__/admin/admin-cli/#api-tokens), making it easier to integrate securely with your existing package build process or pipeline -- wherever it lives. Administrators have full control over API token creation and lifetimes, and tokens can even be limited in scope to restrict publishing to only specific sources.

Check out our [package-manager-demo](https://github.com/rstudio/package-manager-demo) project on GitHub for an example of enabling API tokens, building, and publishing a package with GitHub Actions.

## Learn More

In addition to hosting Linux and Windows binary packages, our [Public Package Manager](https://packagemanager.rstudio.com) service has other free features such as historic CRAN snapshots and Bioconductor support. For more advanced needs, [RStudio Package Manager](https://www.rstudio.com/products/package-manager/) adds additional features to help you easily manage and distribute packages within your organization such as:

-   offline CRAN mirrors
-   curated repositories
-   internal package support
-   custom binary packages

Try switching your CRAN repository to PPM today and see the benefits for yourself! And if you have questions or ideas on how we can make your package management easier, reach out on our [RStudio Community](https://community.rstudio.com/c/r-admin/package-manager/21) page.
