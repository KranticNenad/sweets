<?php

    namespace App\Controllers;

    use App\Core\Role\UserRoleController;
    use App\Models\SlatkisModel;
    use App\Models\SlikaModel;
    use App\Models\VrstaModel;
    use App\Models\BojaModel;
    use App\Models\SastojakModel;
    use App\Models\DrzavaModel;

    class AdminSlatkisManagementController extends UserRoleController{
        public function slatkisi(){
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkisi = $slatkisModel->getAll();

            $this->set('slatkisi',$slatkisi);

            $slikaModel = new SlikaModel($this->getDatabaseConnection());
            $slike = $slikaModel->getAll();

            $this->set('slike', $slike);
        }

        public function getEdit ($id) {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkis = $slatkisModel->getById($id);

            if (!$slatkis){
                $this->redirect("admin/slatkisi");
            }

            $this->set("slatkis", $slatkis);

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

            $drzavaModel = new DrzavaModel($this->getDatabaseConnection());
            $drzave = $drzavaModel->getAll();

            $this->set('drzave', $drzave);
            
            return $slatkisModel; 
        }

        public function  postEdit($id) {
            $slatkisModel = $this->getEdit($id);
            
            $naziv = filter_input(INPUT_POST, 'naziv', FILTER_SANITIZE_STRING);
            $cena = filter_input(INPUT_POST, 'cena');
            $vrsta_id = filter_input(INPUT_POST, 'vrsta_id');
            $drzava_id = filter_input(INPUT_POST, 'drzava_id');
            $boja_id = filter_input(INPUT_POST, 'boja_id');
            $jedinica_mere = filter_input(INPUT_POST, 'jedinica_mere', FILTER_SANITIZE_STRING);

            $slatkisModel->editById($id, [
                'naziv' => $naziv,
                'cena' => $cena,
                'vrsta_id' => $vrsta_id,
                'drzava_id' => $drzava_id,
                'boja_id' => $boja_id,
                'jedinica_mere' => $jedinica_mere
            ]);
            $this->redirect("admin/slatkisi");
        }

        public function delete ($id) {
            $slikaModel = new SlikaModel($this->getDatabaseConnection());
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            
            $slikaModel->deleteAllBySlatkisId($id);
            $slatkisModel->deleteById($id);
        }

        public function getAdd () {
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());

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
            
            return $slatkisModel; 
        }

        public function  postAdd() {
            $slatkisModel = $this->getAdd();
            
            $naziv = filter_input(INPUT_POST, 'naziv', FILTER_SANITIZE_STRING);
            $cena = filter_input(INPUT_POST, 'cena');
            $vrsta_id = filter_input(INPUT_POST, 'vrsta_id');
            $drzava_id = filter_input(INPUT_POST, 'drzava_id');
            $boja_id = filter_input(INPUT_POST, 'boja_id');
            $jedinica_mere = filter_input(INPUT_POST, 'jedinica_mere', FILTER_SANITIZE_STRING);

            $slatkisModel->add([
                'naziv' => $naziv,
                'cena' => $cena,
                'vrsta_id' => $vrsta_id,
                'drzava_id' => $drzava_id,
                'boja_id' => $boja_id,
                'jedinica_mere' => $jedinica_mere
            ]);
            $this->redirect("admin/slatkisi");
        }
    }