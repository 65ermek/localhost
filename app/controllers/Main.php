<?php

namespace app\controllers;


class Main extends App {

    public $layout = 'main';
    public function indexAction() {
        $title = 'Главная страница';
        $this->set(compact('title'));
    }
}