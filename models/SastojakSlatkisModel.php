<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class SastojakSlatkisModel extends Model
{
    protected function getFields (): array{
        return [
            'slatkis_id'   => Field::editableUnsignedInteger(15),
            'sastojak_id'  => Field::editableUnsignedInteger(15)
        ];
    }
}
