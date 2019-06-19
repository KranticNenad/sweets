<?php

    namespace App\Controllers;

    use App\Core\Role\UserRoleController;
    use App\Models\PorudzbinaModel;
    use App\Models\StavkaModel;
    use App\Models\KupacModel;
    use App\Models\SlatkisModel;

    class AdminPorudzbinaManagementController extends UserRoleController{
        public function porudzbine(){
            $porudzbinaModel = new PorudzbinaModel($this->getDatabaseConnection());
            $porudzbine = $porudzbinaModel->getAll();

            $this->set('porudzbine',$porudzbine);
        }

        public function show($id){
            $porudzbinaModel = new PorudzbinaModel($this->getDatabaseConnection());
            $porudzbina = $porudzbinaModel->getById($id);

            if (!$porudzbina){
                $this->redirect("");
            }

            $this->set('porudzbina', $porudzbina);

            $stavkaModel = new StavkaModel($this->getDatabaseConnection());
            $stavke = $stavkaModel->getAllByFieldName("porudzbina_id", $id);

            $this->set('stavke', $stavke);

            $kupacModel = new KupacModel($this->getDatabaseConnection());
            $kupac = $kupacModel->getById($porudzbina->kupac_id);

            $this->set('kupac', $kupac);

            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkisi = [];

            foreach ($stavke as $stavka){
                $slatkisi [] = $slatkisModel->getById($stavka->slatkis_id);
            }

            $this->set('slatkisi', $slatkisi);
        }

        public function showPost(){
            $porudzbina_id = filter_input(INPUT_POST, 'porudzbina_id');
            $status = filter_input(INPUT_POST, 'status');
            $is_placeno = filter_input(INPUT_POST, 'is_placeno');

            $porudzbinaModel = new PorudzbinaModel($this->getDatabaseConnection());
            $porudzbinaModel->editById($porudzbina_id, [
                'status' => $status,
                'is_placeno' => $is_placeno
            ]);

            $this->redirect("admin/porudzbine");
        }
    }