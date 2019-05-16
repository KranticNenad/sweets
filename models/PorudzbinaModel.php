<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class PorudzbinakModel extends Model
{
    protected function getFields (): array{
        return [
            'porudzbina_id' => Field::readOnlyUnsignedInteger(15),
            'status'        => new Field('@^(realizovana|odbijena|u obradi)$@', true),
            'datum'         => Field::readOnlyDateTime(),
            'is_placeno'    => Field::editableTinyInt(),
            'kupac_id'      => Field::editableUnsignedInteger(15),
            'ukupno'        => Field::editableDecimal(11,2)
        ];
    }
}
