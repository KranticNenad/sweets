<?php
namespace App\Models;

use App\Core\DatabaseConnection;

class SlikaModel
{
    private $dbc;

    public function __construct(DatabaseConnection &$dbc)
    {
        $this->dbc = $dbc;
    }

    public function getByName(string $slikaName)
    {
        $query = "SELECT * FROM slike WHERE naziv = ?";
        $prep = $this->dbc->getConnection()->prepare($query);
        $res = $prep->execute([$slikaName]);
        $slika = NULL;
        if ($res) {
            $slika = $prep->fetch(\PDO::FETCH_OBJ);
        }
        return $slika;
    }

    public function getAll(): array
    {
        $query = "SELECT * FROM slike";
        $prep = $this->dbc->getConnection()->prepare($query);
        $res = $prep->execute();
        $slike = [];
        if ($res) {
            $slike = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $slike;
    }

    public function getAllBySlatkisId(int $slatkisId): array
    {
        $query = "SELECT * FROM slike WHERE slatkis_id = ?";
        $prep = $this->dbc->getConnection()->prepare($query);
        $res = $prep->execute([$slatkisId]);
        $slike = [];
        if ($res) {
            $slike = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $slike;
    }
}
