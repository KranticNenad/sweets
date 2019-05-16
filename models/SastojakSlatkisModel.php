<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\NumberValidator;

class SastojakSlatkisModel extends Model
{
    protected function getFields (): array{
        return [
            'slatkis_id'   => new Field((new NumberValidator())->setIntegerLength(15)),
            'sastojak_id'  => new Field((new NumberValidator())->setIntegerLength(15))
        ];
    }
}
