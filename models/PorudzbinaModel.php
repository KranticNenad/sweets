<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\SetValidator;
use App\Validators\NumberValidator;
use App\Validators\DateTimeValidator;
use App\Validators\TinyIntValidator;

class PorudzbinaModel extends Model
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

    final public function getLatestId (){
        $query = "SELECT porudzbina_id FROM porudzbina ORDER BY porudzbina_id DESC LIMIT 0,1;";
        $prep = $this->getConnection()->prepare($query);
        $res = $prep->execute();
        $id = NULL;
        if ($res) {
            $id = $prep->fetch(\PDO::FETCH_NUM);
        }
        return $id;
    }
}
