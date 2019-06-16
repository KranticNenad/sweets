<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\StringValidator;

class AdminModel extends Model
{
    protected function getFields (): array{
        return [
            'username'      => new Field((new StringValidator())->setMaxLength(15), false),
            'password_hash' => new Field((new StringValidator())->setMaxLength(255))
        ];
    }
}
