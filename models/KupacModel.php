<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class KupacModel extends Model
{
    protected function getFields (): array{
        return [
            'kupac_id'  => Field::readOnlyUnsignedInteger(15),
            'ime'       => Field::editableUnicodeLatinString(255),
            'prezime'   => Field::editableUnicodeLatinString(255),
            'adresa'    => Field::editableUnicodeLatinString(255)
        ];
    }
}
