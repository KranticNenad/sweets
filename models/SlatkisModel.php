<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\SetValidator;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;

class SlatkisModel extends Model
{
    protected function getFields (): array{
        return [
            'slatkis_id'    => new Field((new NumberValidator())->setIntegerLength(15), false),
            'naziv'         => new Field((new StringValidator())->setMaxLength(50)),
            'cena'          => new Field((new NumberValidator())->setIntegerLength(5)->setDecimal()->setMaxDecimalDigits(2)),
            'vrsta_id'      => new Field((new NumberValidator())->setIntegerLength(15)),
            'drzava_id'     => new Field((new NumberValidator())->setIntegerLength(15)),
            'boja_id'       => new Field((new NumberValidator())->setIntegerLength(15)),
            'jedinica_mere' => new Field((new SetValidator())->setItems(['gram', 'komad']))
        ];
    }
}
