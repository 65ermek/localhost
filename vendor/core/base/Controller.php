<?php

namespace vendor\core\base;

class Controller {

    public array $route = [];
    public $view;
    public $layout;
    public array $vars;
    public function __construct($route) {
        $this->route = $route;
        $this->view = $route['action'];
    }
    public function getView() {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }
    public function set($vars) {
        $this->vars = $vars;
    }

    public function isAjax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH'])
            && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }
    public function loadView($view, $vars = []) {
        extract($vars);
        require APP . "/views/{$this->route['controller']}/{$view}.php";
    }
}