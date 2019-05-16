<?php
    namespace App\Controllers;

    use App\Core\ApiController;
    use App\Models\SlatkisModel;

    class ApiSlatkisController extends ApiController{
        public function show($id){
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkis = $slatkisModel->getById($id);
            $this->set('slatkis', $slatkis);
        }
    }