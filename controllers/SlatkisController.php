<?php
    namespace App\Controllers;

    use App\Models\SlatkisModel;

    class SlatkisController extends \App\Core\Controller{
        public function show($id) {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkis = $slatkisModel->getById($id);

            $this->set('slatkis',$slatkis);

        }
    }