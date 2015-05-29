# CakePHP CMS

Project for creating CMS applications with [CakePHP](http://cakephp.org) 3.x

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar install`.

If Composer is installed globally, run
```bash
composer install
```
## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

Execute the following command to create the default tables in your database:
```bash
bin/cake migrations migrate
```

## What is included?
* Users CRUD
* Authentication (Login and Logout)
* Migrations

## Default settings
After exectuing migrations, there's a default user to login in the CMS:
* username: admin
* password: 123456

## TODO
* Add logout button
* Clean views (remove unnecessary classes, etc) => Layout plugin to style views
* Add sidebar
* Roles CRUD
* Authorization (who’s allowed to access what)
* Security
* Testing
