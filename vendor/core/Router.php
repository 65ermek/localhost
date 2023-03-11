<?php
namespace vendor\core;

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
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    public static function dispatch($url) {
        $url = self::removeQueryString($url);
        var_dump($url);
        if (self::matchRoute($url)) {
            $controller = 'app\controllers\\' . self::$route['controller'];
            if (class_exists($controller)) {
                $cObj = new $controller(self::$route);
                $action = self::loverCamelCase(self::$route['action']) . 'Action';
                if (method_exists($cObj, $action)) {
                    $cObj->$action();
                } else {
                    echo "Метод :<b>$controller::$action</b> не найден";
                }
            } else {
                echo "Контроллер :<b>$controller</b> не найден";
            }
        } else {
            http_response_code(404);
            include '404.html';
        }
    }
    protected static function upperCamelCase($name) {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }
    protected static function loverCamelCase($name): string
    {
        return lcfirst(self::upperCamelCase($name));
    }
    protected static function removeQueryString($url) {
        if ($url) {
            $params = explode('&', $url, 2);
            if (false === strpos($params[0], '=')) {
                return rtrim($params[0], '/');
            } else {
                return '';
            }
        }
    }
}