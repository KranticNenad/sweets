<?php
    namespace App\Controllers;

    use App\Models\SlatkisModel;
    use App\Models\VrstaModel;
    use App\Models\BojaModel;
    use App\Models\SastojakModel;
    use App\Models\SlikaModel;
    use App\Models\DrzavaModel;

    class SlatkisController extends \App\Core\Controller{
        public function show($id) {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkis = $slatkisModel->getById($id);

            if (!$slatkis){
                $this->redirect("");
            }

            $this->set('slatkis',$slatkis);

            $vrstaModel = new VrstaModel($this->getDatabaseConnection());
            $vrste = $vrstaModel->getAll();

            $this->set('vrste', $vrste);

            $bojaModel = new BojaModel($this->getDatabaseConnection());
            $boje = $bojaModel->getAll();

            $this->set('boje', $boje);

            $sastojakModel = new SastojakModel($this->getDatabaseConnection());
            $sastojci = $sastojakModel->getAll();

            $this->set('sastojci', $sastojci);

            $drzavaModel = new DrzavaModel($this->getDatabaseConnection());
            $drzave = $drzavaModel->getAll();

            $this->set('drzave', $drzave);

            $slikaModel = new SlikaModel($this->getDatabaseConnection());
            $slike = $slikaModel->getAllBySlatkisId($id);

            $this->set('slike', $slike);

        }

        public function filter (){
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());

            $minPrice = filter_input(INPUT_POST, 'min-price');
            $maxPrice = filter_input(INPUT_POST, 'max-price');
            $vrsta = filter_input(INPUT_POST, 'vrsta');
            $boja = filter_input(INPUT_POST, 'boja');
            $sastojak = filter_input(INPUT_POST, 'sastojak');

            $slatkisi = $slatkisModel->getAllByFilter([
                'min-price' => $minPrice,
                'max-price' => $maxPrice,
                'vrsta_id' => $vrsta,
                'boja_id' => $boja,
                'sa.sastojak_id' => $sastojak
            ]);

            $this->set("slatkisi", $slatkisi);
            
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