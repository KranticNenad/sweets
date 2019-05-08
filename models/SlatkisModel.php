<?php
    namespace App\Models;

    use App\Core\DatabaseConnection;

    class SlatkisModel {
        private $dbc;

        public function __construct(DatabaseConnection &$dbc)
        {
            $this->dbc = $dbc;
        }

        public function getById (int $slatkisId){
            $query = "SELECT * FROM slatkisi WHERE slatkis_id = ?;";
            $prep = $this->dbc->getConnection()->prepare($query);
            $res = $prep->execute([$slatkisId]);
            $slatkis = NULL;
            if ($res){
                $slatkis = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $slatkis;
        }

        public function getAll (): array{
            $query = "SELECT * FROM slatkisi;";
            $prep = $this->dbc->getConnection()->prepare($query);
            $res = $prep->execute();
            $slatkisi = [];
            if ($res){
                $slatkisi = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $slatkisi;
        }
    }