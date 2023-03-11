<?php

namespace app\controllers;

use app\models\Office;

class OfficesController extends AppController {
    public function indexAction() {
        $model = new Office();
        $offices = $model->findAll();
        $title = 'Офисы на карте';
        debug($offices);
        $this->set(compact('title', 'offices'));
    }
}