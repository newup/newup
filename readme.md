## NewUp

[![Build Status](https://travis-ci.org/newup/core.svg)](https://travis-ci.org/newup/core)
[![Latest Stable Version](https://poser.pugx.org/newup/newup/v/stable.svg)](https://packagist.org/packages/newup/newup)
[![Total Downloads](https://poser.pugx.org/newup/newup/downloads.svg)](https://packagist.org/packages/newup/newup)
[![Latest Unstable Version](https://poser.pugx.org/newup/newup/v/unstable.svg)](https://packagist.org/packages/newup/newup)
[![License](https://poser.pugx.org/newup/newup/license.svg)](https://packagist.org/packages/newup/newup)

NewUp is a command line utility that makes creating packages quick, easy and universal. NewUp attempts to make creating packages for every programming language, framework, platform, etc as painless as possible. Just because NewUp is written in PHP, does not mean generated packages have to be PHP.

## Installation With Composer

NewUp is installed using [Composer](https://getcomposer.org/). There is no other installation option as Composer is required to use NewUp. To install NewUp, decide which directory you want to install NewUp in and run the following command from that directory:

~~~
composer create-project newup/newup .
~~~

Composer will take just a moment to install of the dependencies required for NewUp to work correctly.

To make it easier to work with NewUp, consider adding the directory you installed NewUp in to your `PATH`.

## Configuration

NewUp contains a few settings that can be configured. Locate the `config\configuration.php` file and examine the various configuration items that are available to you.