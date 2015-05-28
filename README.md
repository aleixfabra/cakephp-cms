# CakePHP CMS

Project for creating CMS applications with [CakePHP](http://cakephp.org) 3.x

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar install`.

If Composer is installed globally, run
```bash
composer install
```

## What is included?
* Users CRUD
* Authentication (Login and Logout)

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

## TODO
* Add default admin user
* Add logout button
* Clean views (remove unnecessary classes, etc) => Layout plugin to style views
* Add sidebar
* Add Role model (A user has one role)
* Roles CRUD
* Authorization (who’s allowed to access what)
* Security
* Testing
