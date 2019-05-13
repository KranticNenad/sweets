<?php
    namespace App\Controllers;

    use App\Models\SlatkisModel;

    class MainController extends \App\Core\Controller {

        public function home() {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkisi = $slatkisModel->getAll();

            $this->set('slatkisi',$slatkisi);

        }

    }