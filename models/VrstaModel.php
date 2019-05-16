<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class VrstaModel extends Model
{
    protected function getFields (): array{
        return [
            'vrsta_id'  => Field::readOnlyUnsignedInteger(15),
            'naziv'     => Field::editableUnicodeLatinString(50)
        ];
    }
}
