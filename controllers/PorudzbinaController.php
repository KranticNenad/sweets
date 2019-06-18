<?php

    namespace App\Controllers;

    use App\Core\Controller;
    use App\Models\SlikaModel;

    class PorudzbinaController extends Controller{
        public function korpa (){
            $items = $this->getSession()->get("items");
            
            $this->set('slatkisi', $items); 

            $slikaModel = new SlikaModel($this->getDatabaseConnection());
            $slike = $slikaModel->getAll();

            $this->set('slike', $slike);
        }

        public function korpaPost(){
            
        }
    }