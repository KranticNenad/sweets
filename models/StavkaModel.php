<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class StavkakModel extends Model
{
    protected function getFields (): array{
        return [
            'stavka_id'     => Field::readOnlyUnsignedInteger(15),
            'kolicina'      => Field::editableDecimal(7,2),
            'cena'          => Field::editableDecimal(9,2),
            'slatkis_id'    => Field::editableUnsignedInteger(15),
            'porudzbina_id' => Field::editableUnsignedInteger(15)
        ];
    }
}
