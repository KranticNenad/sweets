<?php
    namespace App\Controllers;

    use App\Models\SlatkisModel;
    use App\Models\SlikaModel;

    class SlatkisController extends \App\Core\Controller{
        public function show($id) {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkis = $slatkisModel->getById($id);

            if (!$slatkis){
                header('Location: /');
                exit;
            }

            $this->set('slatkis',$slatkis);

            $slikaModel = new SlikaModel($this->getDatabaseConnection());
            $slike = $slikaModel->getAllBySlatkisId($id);

            $this->set('slike', $slike);

        }
        
        //have to get data from POST request somehow, also need to get images
        public function edit ($id, $data) {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkis = $slatkisModel->editById($id, $data);
        }

        public function delete ($id) {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkis = $slatkisModel->deleteById($id);
        }

        //have to get data from POST request somehow, also need to get images
        public function add ($data){
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkisModel->add($data);
        }
    }