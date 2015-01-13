## The List: a hero's quest to learning Laravel

[![v1.0](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)

This is a simple application, built on Laravel that provides a backend with authentication and a RESTful api for handling resources to a random frontend (such as one built on Ember.js for example)

### Install

Clone the repo with:
```
$ git clone git@github.com:nat-nayd/thelist.git myProject
```

Create the database via the **init.sql** in */app/databases/init*

### Configure

1. Create a `local` folder in */app/config/*
2. Copy/Paste all files from `config` that you intend to modify
3. Change the `url` and the `key` options in */app/config/local/app.php* with your own
4. Change the database credentials in */app/config/local/database.php* with your own

### ToDo
*Backend additions:*
* Add Pagination
* Add filters
* Add sorting

*Frontend*
* Build a SPA frontend with Ember.js


## Official Laravel Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### License

TheList is built on an open-sourced software and as such is licensed under the [MIT license](http://opensource.org/licenses/MIT)
