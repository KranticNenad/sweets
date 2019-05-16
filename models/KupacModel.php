<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;

class KupacModel extends Model
{
    protected function getFields (): array{
        return [
            'kupac_id'  => new Field((new NumberValidator())->setIntegerLength(15), false),
            'ime'       => new Field(new StringValidator()),
            'prezime'   => new Field(new StringValidator()),
            'adresa'    => new Field(new StringValidator())
        ];
    }
}
