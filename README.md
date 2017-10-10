# README #

This README documents the requirements for bare-bones, created by Luke Moody (LMWD)

### What is this repository for? ###

Boilerplate for bespoke front-end developments.

* bare-bones-wp
* Version 4.0.1
* https://lukemoody.co.uk

### Structure ###

```shell
themes/your-theme-name/   # → Theme root
├── bower_components/     # → Bower packages (never edit)
├── dist/                 # → Built assets (never edit)
├── inc/                  # → Includes folder
│   ├── assets/           # → Images, logo, icons etc
│   ├── css/              # → Compiled source css file
│   ├── fonts/            # → Font folder
│   ├── js/               # → JavaScript build file, library and compiled source file
│   └── scss/             # → Sass partials, mixins and variables
├── lib/                  # → WP specific Library files
├── node_modules/         # → Node.js packages (never edit)
├── template-parts/       # → WP specific content layout templates
├── .gitignore            # → Directories, files, or patterns you don't want to be tracked by version control
├── bower.json            # → Manifest to define tasks
├── functions.php         # → Includes and WP functions
├── gulpfile.json         # → Manifest to define tasks
├── package.json          # → Node.js dependencies and scripts
├── style.css             # → Theme meta information
```

### What's being used? ###

* Node.js
* Bower
* Gulp
* TweenMax
* Font Awesome
* jQuery
* Sass
* BrowserSync

### How to install? ###

Assuming that Gulp has been installed and the project has already been configured with a package.json, bower.json and a gulpfile.json:

* Change to the project's root directory.
* Install project dependencies with `npm install`
* Run `bower install` to install Bower components
* Run Gulp with `gulp watch`

### Who do I talk to? ###

* LMWD
* Luke Moody - hello@lukemoody.co.uk
