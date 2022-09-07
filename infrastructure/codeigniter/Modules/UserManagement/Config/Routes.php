<?php

$routes->group("user", ["namespace" => "\Modules\UserManagement\Adapters\Input"], function ($routes) {
    $routes->get("/", "LoginInputAdapter::index");
    $routes->post("login", "LoginInputAdapter::login");
    $routes->post("logout", "LoginInputAdapter::logout");
});
