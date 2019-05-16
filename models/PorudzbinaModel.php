<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\SetValidator;
use App\Validators\NumberValidator;
use App\Validators\DateTimeValidator;
use App\Validators\TinyIntValidator;

class PorudzbinakModel extends Model
{
    protected function getFields (): array{
        return [
            'porudzbina_id' => new Field((new NumberValidator())->setIntegerLength(15), false),
            'status'        => new Field((new SetValidator())->setItems(['realizovana', 'odbijena', 'u obradi'])),
            'datum'         => new Field((new DateTimeValidator())->allowDate()->allowTime(), false),
            'is_placeno'    => new Field((new TinyIntValidator())),
            'kupac_id'      => new Field((new NumberValidator())->setIntegerLength(15)),
            'ukupno'        => new Field((new NumberValidator())->setIntegerLength(11)->setDecimal()->setMaxDecimalDigits(2))
        ];
    }
}
