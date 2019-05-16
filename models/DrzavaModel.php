<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class DrzavaModel extends Model
{
    protected function getFields (): array{
        return [
            'drzava_id' => Field::readOnlyUnsignedInteger(15),
            'naziv'     => Field::editableUnicodeLatinString(255)
        ];
    }
}
