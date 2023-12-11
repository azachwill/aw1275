---
title: RStudio Connect Python Minimum Version Update
author: R package build
date: '2022-04-11'
slug: rstudio-connect-minimum-python-version-update
authors:
  - Kelly O'Briant
description: The March 2022 release of RStudio Connect has updated the minimum version of Python supported to 3.5 and removed support for Python 2. This post outlines things Connect Administrators and Publishers should know about this change.
tags:
  - Connect
blogcategories:
  - Products and Technology
events: blog
nohero: true
---

# What Administrators and Publishers should know

> The March 2022 RStudio Connect release removes support for Python 2 and updates the minimum version supported to Python 3.5.

## Why now?

Python 2.7 has reached end of life (EOL) maintenance status. On January 1, 2020, the Python language governing body ended support for this version, and they are no longer providing security patches. RStudio Connect continued to support Python 2.7 beyond its EOL status announcement, but several factors have influenced our decision to end support:

-   Python 3 is now widely adopted and is the actively-developed version of the Python language.
-   In January 2021, the `pip` 21.0 release officially dropped support for Python 2.
-   A large number of projects pledged to drop support for Python 2 in 2020 including TensorFlow, scikit-learn, Apache Spark, pandas, XGBoost, NumPy, Bokeh, Matplotlib, IPython, and Jupyter Notebook.

## How does this affect my Connect installation and published content using an older version of Python?

The March 2022 release of RStudio Connect introduces a breaking change for installations and content that use a Python version below 3.5. 

 -   If an older version of Python is listed as an available option in the Connect configuration file, Connect will fail to start.
 -   Published R Markdown reports and Jupyter Notebooks that use older Python versions can still be viewed. However, they cannot be re-rendered. Scheduled reports that continue to run will send error message emails.
-   Existing applications and APIs that use older Python versions will no longer run. An HTTP 502 error will be returned for all requests to these applications.

## What action needs to be taken?

Connect Administrators need to remove older versions of Python from the Connect installation. Publishers need to update their deployed content to use Python version 3.5 or higher.

### Update the Connect configuration file

In order to upgrade RStudio Connect, verify that your configuration file does not include Python 2 or Python 3 versions prior to 3.5. If it does, and you do not remove those configuration settings, the Connect service will throw an error during start-up. This is a breaking change.

The configuration file should only contain Python 3 versions that meet the minimum requirements (Example):

    ; /etc/rstudio-connect/rstudio-connect.gcfg
    [Python]
    Enabled = true
    Executable = /shared/Python/3.7.6/bin/python3
    Executable = /shared/Python/3.8.1/bin/python3

In addition to the new minimum version requirements, Python installations no longer require the `virtualenv` package to be installed. Python content will now use the `venv` module included with Python 3.

*Note: RStudio Workbench does not document minimum version requirements for Python, but you may want to schedule time to check or update the versions available there as well to avoid publishing errors due to environment mismatches.*

### Update content that uses an older version of Python

Content owners need to update their code to use Python version 3.5 or higher. Content can be re-published to the same location, preserving existing settings like custom URLs, environment variables, access permissions, or runtime settings.

If published apps or APIs using an older version of Python are not updated, they will fail to run. Static R Markdown reports and Jupyter Notebooks using an older version of Python can still be viewed, but they will fail to re-render. Scheduled reports will send error message emails.

## How can you identify content that will break?

Conduct a Python runtime audit of your server and the deployed content. This [video overview](https://youtu.be/GLJucEndOgo) provides tips for auditing Python usage on RStudio Connect depending on the level of detail you need.

-   Start by executing the script in `/opt/rstudio-connect/scripts/find-python-envs` which will list all Python virtual environments and the applications that use them.
-   If you require a more detailed audit, use the RStudio Connect Server API to create a custom report:
    -   This [basic example](https://docs.rstudio.com/connect/cookbook/runtimes/) includes a summary report without links to content items.
    -   This [advanced example](https://solutions.rstudio.com/data-science-admin/connect-apis/python-audit-report/) includes links to each piece of content with owner contact information.

# Upgrade RStudio Connect

Before upgrading, please review the [full release notes](http://docs.rstudio.com/connect/news).

Upgrading RStudio Connect typically requires less than five minutes. This release contains a breaking change which may require an update to the Connect configuration file.

The `rstudio-connect` service will fail to start if the configuration file includes Python 2 or Python 3 versions prior to 3.5. [Edit the configuration](https://docs.rstudio.com/connect/admin/getting-started/#editing-config) to remove any `Python.Executable` properties that do not meet the new minimum version requirements.

If you are upgrading from a version earlier than the February 2022 edition, be sure to consult the release notes for the intermediate releases, as well:

-   February 2022 contained a breaking change for certain LDAP configurations, and [Platform Support](https://www.rstudio.com/about/platform-support/) updates.
-   November 2021 contained a breaking change for stricter permissions on the creation of several `Server.DataDir` sub-directories.
-   Review breaking changes from earlier versions in the [release notes](http://docs.rstudio.com/connect/news).

To perform an RStudio Connect upgrade, download and run the installation script. The script installs a new version of Connect on top of the earlier one. Existing configuration settings are respected.

    # Download the installation script
    curl -Lo rsc-installer.sh https://cdn.rstudio.com/connect/installer/installer-v1.10.0.sh

    # Run the installation script
    sudo -E bash ./rsc-installer.sh 2022.03.2

[Standard upgrade documentation can be found here](https://docs.rstudio.com/rsc/upgrade/).

<h3 align="center"><a href="https://rstudio.com/about/subscription-management/">Sign up for RStudio Professional Product Updates</a></h3>
