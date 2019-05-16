<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class SlatkisModel extends Model
{
    protected function getFields (): array{
        return [
            'slatkis_id'    => Field::readOnlyUnsignedInteger(15),
            'naziv'         => Field::editableUnicodeLatinString(50),
            'cena'          => Field::editableDecimal(5,2),
            'vrsta_id'      => Field::editableUnsignedInteger(15),
            'drzava_id'     => Field::editableUnsignedInteger(15),
            'boja_id'       => Field::editableUnsignedInteger(15),
            'jedinica_mere' => new Field('@^(gram|komad)$@', true)
        ];
    }
}
