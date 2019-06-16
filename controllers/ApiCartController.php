<?php
    
    namespace App\Controllers;

    use App\Models\SlatkisModel;

    class ApiCartController extends \App\Core\ApiController{
        public function getItems(){
            $items = $this->getSession()->get('items', []);
            $this->set('items', $items);
        }

        public function addItem($slatkisId){
            $slatkisModel = new SlatkisModel($this->getDatabaseConnection());
            $slatkis = $slatkisModel->getById($slatkisId);

            if (!$slatkis){
                $this->set('error', -1);
                return;
            }

            $items = $this->getSession()->get('items', []);

            foreach ($items as $item){
                if ($item->slatkis_id == $slatkisId){
                    $this->set('error', -2);
                    return;
                }
            }

            $items[] = $slatkis;
            $this->getSession()->put('items', $items);

            $this->set('error', 0);
        }

        public function clear(){
            $this->getSession()->put('items', []);
            $this->set('error', 0);
        }
    }