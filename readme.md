## NewUp

[![Build Status](https://travis-ci.org/newup/core.svg)](https://travis-ci.org/newup/core)
[![Latest Stable Version](https://poser.pugx.org/newup/newup/v/stable.svg)](https://packagist.org/packages/newup/newup)
[![Total Downloads](https://poser.pugx.org/newup/newup/downloads.svg)](https://packagist.org/packages/newup/newup)
[![Latest Unstable Version](https://poser.pugx.org/newup/newup/v/unstable.svg)](https://packagist.org/packages/newup/newup)
[![License](https://poser.pugx.org/newup/newup/license.svg)](https://packagist.org/packages/newup/newup)

NewUp is a command line utility that makes creating packages quick, easy and universal. NewUp attempts to make creating packages for every programming language, framework, platform, etc as painless as possible. Just because NewUp is written in PHP, does not mean generated packages have to be PHP.

## Installation With Composer

NewUp is installed using [Composer](https://getcomposer.org/). This is the easiest installation option as Composer is required to use NewUp. To install NewUp, decide which directory you want to install NewUp in and run the following command from that directory:

~~~
composer create-project newup/newup .
~~~

Composer will take just a moment to install all of the dependencies required for NewUp to work correctly.

To make it easier to work with NewUp, consider adding the directory you installed NewUp in to your `PATH`.

## Global Installation With Composer

NewUp can be installed globally using [Composer](https://getcomposer.org/). To do this, issue the following command:

~~~
composer global require newup/newup
~~~

When NewUp is globally installed, it might be easier to move the configuration directory location to somewhere else on the system. To do this, copy the contents of the `config` directory and create a new environment variable named `NEWUP_CONFIGURATION` with the path to the configuration directory as the value.

## Configuration

NewUp contains a few settings that can be configured. Locate the `config\configuration.php` file and examine the various configuration items that are available to you.

## General Usage

This section isn't quite ready yet as there is still some work to be done on the core utilities. Everything is getting close though!