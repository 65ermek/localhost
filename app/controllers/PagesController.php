<?php

namespace app\controllers;



class PagesController extends AppController {
//    public function contactAction() {
//        $title = 'Страница Контактов';
//        $this->set(compact('title'));
//    }
    public function aboutAction() {
        $title = 'Страница о нас';
        $this->set(compact('title'));
    }
}