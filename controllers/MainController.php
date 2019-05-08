<?php
    namespace App\Controllers;

    use App\Core\DatabaseConnection;
    use App\Models\SlatkisModel;

    class MainController{

        private $dbc;

        public function __construct(DatabaseConnection &$dbc)
        {
            $this->dbc = $dbc;
        }

        public function home(){
            $slatkisModel = new SlatkisModel($this->dbc);
            $slatkisi = $slatkisModel->getAll();
        }

    }