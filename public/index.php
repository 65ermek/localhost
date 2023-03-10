<?php
$query = rtrim($_SERVER['QUERY_STRING'], '/');

require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('([a-z-]+)/([a-z-]+)');

debug(Router::getRoutes());

if (Router::matchRoute($query)) {
    debug(Router::getRoute());
} else {
    echo '404';
}