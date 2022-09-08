<?php

$routes->group("users", ["namespace" => "\Modules\UserManagement\Adapters\Input"], function ($routes) {
    $routes->get("auth/", "LoginInputAdapter::index");
    $routes->post("login", "LoginInputAdapter::login");
    $routes->post("logout", "LoginInputAdapter::logout");
    
    $routes->get("/", "ListUsersInputAdapter::findAll");
});

