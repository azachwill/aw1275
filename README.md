# Posit Web

## Project dir.
- [Posit Web](#posit-web)
    - [Project dir.](#project-dir)
    - [Architecture](#architecture)
        - [Views](#views)
    - [Installation](#installation)
        - [General Requirements](#general-requirements)
        - [MAC OS](#mac-os)
        - [Database Configuration](#database-configuration)
            - [MacOs(dbngin)](#macosdbngin)
        - [Running and Debugging](#running-and-debugging)
    - [Git](#git)
        - [Branching](#branching)
        - [Naming](#naming)
        - [Commits](#commits)
        - [Pull Requests](#pull-requests)
    - [Update URLs](#update-urls)

## Architecture

The project is based on Wordpress and it used a standard installation. Inside the Content folder (wp-content) the site logic resides in a Theme called **"Posit-web"**. Inside the Theme you will encounter the following elements:

- **Webpack**:  Asset compiling and bundling
- **BladeOne**: A templating engine to display PHP variables in an elegant and readable way
- **SASS**: For styles and visual dependencies
- **ACF**: An ACF folder that contains the JSON structure of all ACF fields used
- **core**: An `core` folder that houses all the APP Logic

### Views

The project uses a templating engine called BladeOne that is an adaptation of the templating engine called [Blade](https://laravel.com/docs/5.6/blade) from Laravel. It is used via a mu-plugin that is necessary to activate. The files follow this naming convention `name.blade.php`, so any file with a `.blade` in their name will be processed by the plugin and will have all the capabilities of the templating engine.

## Installation

### General Requirements
1. Install [Node 16](https://nodejs.org/dist/v16.14.2/)
2. Install [Composer](https://getcomposer.org/download/)
3. Navigate on the terminal/cmd to `wp-content/themes/Posit`
      ```
      npm install
      ```
4.  Create a file named`wp-config-local.php` on the root of the project with the same content as `wp-config-local-sample.php` with the following changes:
      ```
      define( 'DB_NAME', 'wordpress_dev' );
      define( 'DB_USER', 'root' );
      define( 'DB_PASSWORD', 'YOUR_PASSWORD' );
      define( 'DB_HOST', '127.0.0.1' );
      define( 'DB_CHARSET', 'utf8' );
      define( 'DB_COLLATE', '' );
      ```

### MAC OS
1. Install PHP
      ```
      brew install php
      ```
2. Make sure the `~/.composer/vendor/bin` directory is in your system's "PATH".
3. Install Laravel Valet as a global Composer package
      ```
      composer global require laravel/valet
      ```
4. Execute Valet's install command
      ```
      valet install
      ```
5. Register a directory on your machine that contains your application
      ```
      cd ~/Sites // Place where posit-web folder is located
      valet park
      ```
6. Install a [Local DB app](https://dbngin.com/)
7. Install a [Local DB Manager](https://tableplus.com/)

### Database Configuration

#### MacOs(dbngin)
1. Open dbngin and create a new mySQL database server(You can use any name here)
2. Open TablePlus, create a new database connection with the following data
    1. Select MySQL and clic create
    2. Name(anything you want)
    3. Host = 127.0.0.1
    4. User = root
    5. Click connect
3. Once connected open Connection menu and Open a Database or (Shortcut Command + k)
4. Click on new and set `wordpress_dev` as name
5. You can manually set an user and password for that DB or just user root with no password on the `wp-config-local.php` file
6. Click Menu Import->From SQL Dump... Select the DB Backup file.(Ask the dev team for a copy)
7. Install `wp-cli` if you don't have it already on your computer, running ```brew install wp-cli```.

8. Once you have the DB imported, navigate on the terminal to the main folder in the project and then run:
    ```
   wp search-replace https://dev-rstudio.pantheonsite.io http://posit-web.test
   ```


### Running and Debugging

1. Run valet/Xampp/Wampp depending on your OS type
2. Navigate on the terminal to `wp-content/themes/Posit` and then run:
    ```
    npm run development
    ```
3. Open in your browser the address `http://posit-web.test/`

## Git

These are the git rules that we use for the entire project, please follow them and do not override them.

### Branching

The develop branch should be considered the "always working" branch and will be the main place feature branches are merged into when they have been code reviewed and approved.

Working with, merging, updating, and deleting branches is trivial, cheap and easy. As such, developers are encouraged to create branches at will as they work on various features, bugs, and tinkering. Feel free to create branches as often as desired, and work out of those feature branches in your normal daily workflow.

Developers should never directly commit to the dev/master branch if. Instead, always follow the normal process of:

- Create a feature branch off of dev
- Make changes to implement the feature
- Submit a new Pull Request for those changes
- Have those changes peer code reviewed
- After approval, merge the Pull Request into the dev branch

### Naming

New feature branches typically should be created from an up-to-date dev branch:

```
$ git checkout dev
$ git pull
$ git checkout -b <new_branch_name>
```

To keep some form of consistency and legibility among open branches, developers should name their branches in the following format: <initials>/<short_description>.

NOTE: Use your name and your last name initials.

Some examples follow:

```
$ git checkout -b cs/add-hero-functionality
$ git checkout -b cs/fix-bubles-animation
```

This naming structure allows all developers to easily see which developer "owns" or created a particular branch, as well as gives general insight into what code changes live in that branch. Some developers also like to include the Pivotal Tracker ticket number in their branch name.

```
$ git checkout -b cs/fix-blade-one-cache-1234
```

### Commits

Git commits, like branches, are also cheap and easy to make. As such, developers should get into the habit of creating frequent commits along the way, instead of making one huge "big-bang commit" at the end of a feature's development cycle.

Git commits should be kept atomic, which means each commit should be self-contained, related, and fully-functional revolving around a single task or fix.

Git commit messages should contain a shorter, succinct first line, followed by a single blank line, then any additional supporting descriptive paragraphs as desired.

Here is an example of a commit message:

```
#1234(Ticker Number) - Update the ACF Files
```

### Pull Requests

Before submitting a PR, the developer should rebase their feature branch against develop to get the current changes at the time.

All developers on the project should **actively** participate in peer code review of open Pull Requests. Developers are encouraged to leave specific comments and questions on changes, logic flow, business requirements, etc... related to the PR's code.

When code review is complete, the PR request will be merged into the develop branch and the PR will be formally "closed" at that time.

### Update URLs when importing database

When you import a database from production it's going to redirect you to the main site so URLs need to be modify to match your localhost URL.

To do this first install WP-CLI https://wp-cli.org/#installing

Once installed run the following command on your console under the proyect folder

```
wp search-replace https://posit.co http://<your-local-site>
```
