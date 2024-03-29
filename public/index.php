<?php
error_reporting(-1);
use vendor\core\Router;

$query = rtrim($_SERVER['QUERY_STRING'], '/');
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('LIBS', dirname(__DIR__) . '/vendor/libs');
define('APP', dirname(__DIR__) . '/app');
define('CACHE', dirname(__DIR__) . '/tmp/cache');
define('LAYOUT', 'default');

require '../vendor/libs/functions.php';

spl_autoload_register(function ($class) {
    $file = ROOT . '/' .str_replace('\\', '/', $class) . '.php';
    if (is_file($file)) {
        require_once $file;
    }
});

new \vendor\core\App();

Router::add('^pages/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)?$', ['controller' => 'Pages']);
Router::add('^pages/(?P<alias>[a-z-]+)?$', ['controller' => 'Pages', 'action' => 'about']);


Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);
