<?php
namespace App\Models;

use App\Core\DatabaseConnection;

class SlatkisModel
{
    private $dbc;

    public function __construct(DatabaseConnection &$dbc)
    {
        $this->dbc = $dbc;
    }

    public function getById(int $slatkisId)
    {
        $query = "SELECT 
                        s.slatkis_id, s.naziv, s.cena, s.jedinica_mere,
                        b.naziv AS boja, v.naziv AS vrsta,
                        d.naziv AS drzava, sl.naziv as slika 
                    FROM 
                        slatkisi s 
                    JOIN 
                        boje b 
                    ON 
                        s.boja_id = b.boja_id
                    JOIN 
                        vrste v 
                    ON 
                        s.vrsta_id = v.vrsta_id
                    JOIN 
                        drzave d 
                    ON 
                        s.drzava_id = d.drzava_id 
                    JOIN
                        slike sl
                    ON
                        s.slatkis_id = sl.slatkis_id
                    WHERE 
                        s.slatkis_id = ? && sl.is_primarna = true;";
        $prep = $this->dbc->getConnection()->prepare($query);
        $res = $prep->execute([$slatkisId]);
        $slatkis = NULL;
        if ($res) {
            $slatkis = $prep->fetch(\PDO::FETCH_OBJ);
        }
        return $slatkis;
    }

    public function getAll(): array
    {
        $query = "SELECT 
                        s.slatkis_id, s.naziv, s.cena, s.jedinica_mere,
                        b.naziv AS boja, v.naziv AS vrsta,
                        d.naziv AS drzava, sl.naziv as slika
                    FROM 
                        slatkisi s 
                    JOIN 
                        boje b 
                    ON 
                        s.boja_id = b.boja_id
                    JOIN 
                        vrste v 
                    ON 
                        s.vrsta_id = v.vrsta_id
                    JOIN 
                        drzave d 
                    ON 
                        s.drzava_id = d.drzava_id
                    JOIN
                        slike sl
                    ON
                        s.slatkis_id = sl.slatkis_id
                    WHERE 
                        sl.is_primarna = true;";
        $prep = $this->dbc->getConnection()->prepare($query);
        $res = $prep->execute();
        $slatkisi = [];
        if ($res) {
            $slatkisi = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $slatkisi;
    }
}
