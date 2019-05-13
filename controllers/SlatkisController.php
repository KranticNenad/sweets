<?php
    namespace App\Controllers;

    use App\Models\SlatkisModel;
    use App\Models\SlikaModel;

    class SlatkisController extends \App\Core\Controller{
        public function show($id) {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkis = $slatkisModel->getById($id);

            $this->set('slatkis',$slatkis);

            $slikaModel = new SlikaModel($this->getDatabaseConnection());
            $slike = $slikaModel->getAllBySlatkisId($id);

            $this->set('slike', $slike);

        }
    }