<?php

    namespace App\Controllers;

    use App\Core\Controller;
    use App\Models\SlikaModel;
    use App\Models\KupacModel;
    use App\Models\PorudzbinaModel;
    use App\Models\StavkaModel;

    class PorudzbinaController extends Controller{
        public function korpa (){
            $items = $this->getSession()->get("items");
            
            $this->set('slatkisi', $items); 

            $slikaModel = new SlikaModel($this->getDatabaseConnection());
            $slike = $slikaModel->getAll();

            $this->set('slike', $slike);
        }

        public function korpaPost(){
            $slatkis_ids = filter_input(INPUT_POST, 'slatkis_id', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
            $amounts = filter_input(INPUT_POST, 'amount', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
            $prices = filter_input(INPUT_POST, 'price', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
            $sum = filter_input(INPUT_POST, 'sumPost');

            $ime = filter_input(INPUT_POST, 'ime', FILTER_SANITIZE_STRING);
            $prezime = filter_input(INPUT_POST, 'prezime', FILTER_SANITIZE_STRING);
            $adresa = filter_input(INPUT_POST, 'adresa', FILTER_SANITIZE_STRING);

            $kupacModel = new KupacModel($this->getDatabaseConnection());
            $porudzbinaModel = new PorudzbinaModel($this->getDatabaseConnection());
            $stavkaModel = new StavkaModel($this->getDatabaseConnection());

            $kupacModel->add([
                'ime' => $ime,
                'prezime' => $prezime,
                'adresa' => $adresa
            ]);
            
            $kupac_id = $kupacModel->getLatestId()[0];

            $porudzbinaModel->add([
                'kupac_id' => $kupac_id,
                'ukupno' => round ($sum, 2)
            ]);

            $porudzbina_id = $porudzbinaModel->getLatestId()[0];

            for ($i = 0; $i < count($slatkis_ids); $i++){
                $stavkaModel->add([
                    'kolicina' => $amounts[$i],
                    'cena' => round ($prices[$i] * $amounts[$i], 2),
                    'slatkis_id' => $slatkis_ids[$i],
                    'porudzbina_id' => $porudzbina_id
                ]);
            }
        }
    }