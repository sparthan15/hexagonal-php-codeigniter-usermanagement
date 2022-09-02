<?php

$routes->group("user", ["namespace" => "\Modules\UserManagement\Controllers"], function ($routes) {
    $routes->get("/", "LoginInputAdapter::index");
    $routes->post("login", "LoginInputAdapter::login");
    $routes->post("logout", "LoginInputAdapter::logout");
});
