<?php

namespace app\controllers;

use vendor\core\base\Controller;

class Parcels extends Controller {

    public function indexAction() {
        echo 'Parcels::index';
    }
    public function addAction() {
        echo 'Parcels::add';
    }
    public function editAction() {
        echo 'Parcels::edit';
    }
}