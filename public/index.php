<?php
$query = rtrim($_SERVER['QUERY_STRING'], '/');

require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';
Router::add('parcels/add', ['controller' => 'Parcels', 'action' => 'add']);
Router::add('parcels', ['controller' => 'Parcels', 'action' => 'index']);
Router::add('', ['controller' => 'Main', 'action' => 'index']);
debug(Router::getRoutes());
if (Router::matchRoute($query)) {
    debug(Router::getRoute());
} else {
    echo '404';
}