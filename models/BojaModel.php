<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class BojaModel extends Model
{
    protected function getFields (): array{
        return [
            'boja_id'   => Field::readOnlyUnsignedInteger(15),
            'naziv'     => Field::editableUnicodeLatinString(50)
        ];
    }
}
