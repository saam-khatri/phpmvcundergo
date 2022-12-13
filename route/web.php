<?php


//    frontend path

    $route->get('/', "frontend\ApplicationController@index");
    $route->get('about', "frontend\ApplicationController@about");

//    Bacekend path
    $route->get('admin', "backend\DashboardController@index");
    $route->get('admin/login', "backend\DashboardController@login");
    $route->get('admin/signup', "backend\DashboardController@signup");