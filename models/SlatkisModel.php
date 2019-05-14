<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class SlatkisModel extends Model
{
    protected function getFields (): array{
        return [
            'naziv' => new Field('|^\p{Latin}+$|',true)
        ];
    }
}
