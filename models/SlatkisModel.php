<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\SetValidator;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;

class SlatkisModel extends Model
{
    protected function getFields (): array{
        return [
            'slatkis_id'    => new Field((new NumberValidator())->setIntegerLength(15), false),
            'naziv'         => new Field((new StringValidator())->setMaxLength(50)),
            'cena'          => new Field((new NumberValidator())->setIntegerLength(5)->setDecimal()->setMaxDecimalDigits(2)),
            'vrsta_id'      => new Field((new NumberValidator())->setIntegerLength(15)),
            'drzava_id'     => new Field((new NumberValidator())->setIntegerLength(15)),
            'boja_id'       => new Field((new NumberValidator())->setIntegerLength(15)),
            'jedinica_mere' => new Field((new SetValidator())->setItems(['gram', 'komad']))
        ];
    }

    public function getAllByFilter(array $data):array{

        $filterList = [];
        $values = [];
        foreach($data as $fieldName => $value){
            if ($fieldName === "min-price"){
                $values[] = $value;
                continue;
            }
            if ($fieldName === "max-price"){
                $values[] = $value;
                $filterList[] = "cena BETWEEN ? AND ?";
                continue;
            }
            if ($value === "0"){
                continue;
            }
            $values[] = $value;
            $filterList[] = "{$fieldName} = ?";
        }
        $filterString = implode(" AND ", $filterList);

        $query = "SELECT DISTINCT s.slatkis_id, s.naziv, s.cena, s.vrsta_id, s.drzava_id, s.boja_id, s.jedinica_mere FROM slatkis AS s 
        JOIN sastojak_slatkis ss ON s.slatkis_id = ss.slatkis_id 
        JOIN sastojak sa ON ss.sastojak_id = sa.sastojak_id 
        WHERE {$filterString};";
        $prep = $this->getConnection()->prepare($query);
        $res = $prep->execute(array_values($values));
        $objects = [];
        if ($res) {
            $objects = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $objects;
    }
}
