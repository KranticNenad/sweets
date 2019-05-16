<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;

class SastojakModel extends Model
{
    protected function getFields (): array{
        return [
            'sastojak_id'   => new Field((new NumberValidator())->setIntegerLength(15), false),
            'naziv'         => new Field((new StringValidator())->setMaxLength(50))
        ];
    }
}
