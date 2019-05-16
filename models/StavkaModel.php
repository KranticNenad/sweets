<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\NumberValidator;

class StavkakModel extends Model
{
    protected function getFields (): array{
        return [
            'stavka_id'     => new Field((new NumberValidator())->setIntegerLength(15), false),
            'kolicina'      => new Field((new NumberValidator())->setIntegerLength(7)->setDecimal()->setMaxDecimalDigits(2)),
            'cena'          => new Field((new NumberValidator())->setIntegerLength(9)->setDecimal()->setMaxDecimalDigits(2)),
            'slatkis_id'    => new Field((new NumberValidator())->setIntegerLength(15)),
            'porudzbina_id' => new Field((new NumberValidator())->setIntegerLength(15))
        ];
    }
}
