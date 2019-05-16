<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class SastojakModel extends Model
{
    protected function getFields (): array{
        return [
            'sastojak_id'   => Field::readOnlyUnsignedInteger(15),
            'naziv'         => Field::editableUnicodeLatinString(50)
        ];
    }
}
