<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;
use App\Validators\NumberValidator;
use App\Validators\TinyIntValidator;
use App\Validators\ImageNameValidator;

class SlikaModel extends Model
{
    protected function getFields (): array{
        return [
            'naziv'         => new Field((new ImageNameValidator())->setExtensions(['png', 'jpg', 'jpeg'])),
            'is_primarna'   => new Field((new TinyIntValidator())),
            'slatkis_id'    => new Field((new NumberValidator())->setIntegerLength(15))
        ];
    }

    public function getByName(string $slikaName)
    {
        return $this->getByFieldName('naziv', $slikaName);
    }

    public function getAllBySlatkisId(int $slatkisId): array
    {
        return $this->getAllByFieldName('slatkis_id', $slatkisId);
    }

    public function deleteAllBySlatkisId (int $slatkisId)
    {
        $this->deleteAllByFieldName("slatkis_id", $slatkisId);
    }
}
