3asyReport
==========

Welcome to 3asyReport - "it will be" a fully-functional report generator
application that you can use to publish your report...

This document contains information on how to download, install, and start
using 3asyReport. For a more detailed explanation, see the [Installation][1]
chapter of the Symfony Documentation.

1) Installing the 3asyReport
----------------------------

When it comes to installing 3asyReport, you have the following options.

### Use Composer (*recommended*)

As 3asyReport uses [Composer][2] to manage its dependencies, the recommended way
to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new 3asyReport application:

    php composer.phar create-project StephR74/3asyReport path/to/install

Composer will install 3asyReport and all its dependencies under the
`path/to/install` directory.

### Download an Archive File

To quickly test 3asyReport, you can also download an [archive][3] of 3asyReport
and unpack it somewhere under your web server root directory.

If you downloaded an archive "without vendors", you also need to install all
the necessary dependencies. Download composer (see above) and run the
following command:

    php composer.phar install

2) Checking your System Configuration
-------------------------------------

Before starting using, make sure that your local system is properly
configured for 3asyReport.

...[TODO]

3) Getting started with 3asyReport
----------------------------------

This distribution is meant to be the starting point for your 3asyReport
applications, but it also contains some sample report template that you can
learn from and play with.

A great way to start learning 3asyReport is via the [Quick Tour][4], which will
take you through all the basic features of 3asyReport.

Once you're feeling good, you can move onto reading the official
[3asyReport book][5].

Enjoy!

[1]:  http://3asyReport.com/doc/2.6/book/installation.html
[2]:  http://getcomposer.org/
[3]:  http://3asyReport.com/download
[4]:  http://3asyReport.com/doc/2.6/quick_tour/the_big_picture.html