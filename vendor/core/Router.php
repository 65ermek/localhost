<?php

class Router {

    protected static array $routes = [];
    protected static array $route = [];

    public static function add($regexp, $route = []) {
        self::$routes[$regexp] = $route;
    }
    public static function getRoutes(): array
    {
        return self::$routes;
    }
    public static function getRoute(): array
    {
        return self::$route;
    }
    public static function matchRoute($url): bool
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)) {
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }
                self::$route = $route;
                debug($route);
                return true;
            }
        }
        return false;
    }
    public static function dispatch($url) {
        if (self::matchRoute($url)) {
            $controller = self::$route['controller'];
            if (class_exists($controller)) {
                echo 'OK';
            } else {
                echo "Контроллер :<b>$controller</b> не найден";
            }
        } else {
            http_response_code(404);
            include '404.html';
        }
    }
}