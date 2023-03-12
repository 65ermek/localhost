<?php

namespace vendor\core;

use vendor\core\Registry;

class App {
    public static \vendor\core\Registry $app;

    public function __construct() {
        self::$app = Registry::instance();
    }
}