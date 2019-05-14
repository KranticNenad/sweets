<?php
    namespace App\Controllers;

    use App\Models\SlatkisModel;
    use App\Models\VrstaModel;
    use App\Models\BojaModel;
    use App\Models\SastojakModel;
    use App\Models\SlikaModel;

    class MainController extends \App\Core\Controller {

        public function home() {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkisi = $slatkisModel->getAll();

            $this->set('slatkisi',$slatkisi);

            $vrstaModel = new VrstaModel($this->getDatabaseConnection());
            $vrste = $vrstaModel->getAll();

            $this->set('vrste', $vrste);

            $bojaModel = new BojaModel($this->getDatabaseConnection());
            $boje = $bojaModel->getAll();

            $this->set('boje', $boje);

            $sastojakModel = new SastojakModel($this->getDatabaseConnection());
            $sastojci = $sastojakModel->getAll();

            $this->set('sastojci', $sastojci);

            $slikaModel = new SlikaModel($this->getDatabaseConnection());
            $slike = $slikaModel->getAll();

            $this->set('slike', $slike);

        }

    }