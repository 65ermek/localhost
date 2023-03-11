<?php

namespace vendor\core\base;

class Controller {

    public array $route = [];
    public $view;
    public function __construct($route) {
        $this->route = $route;
        $this->view = $route['action'];
        include APP . "/views/{$route['controller']}/{$this->view}.php";
    }

}