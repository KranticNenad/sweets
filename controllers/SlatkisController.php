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

        public function edit ($id) {
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

        public function delete ($id) {
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

        public function add (){
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkisModel->add(
                [
                    
                ]
            );
        }
    }