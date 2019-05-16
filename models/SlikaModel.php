<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Field;

class SlikaModel extends Model
{
    protected function getFields (): array{
        return [
            'naziv'         => Field::readOnlyImageName(),
            'is_primarna'   => Field::editableTinyInt(),
            'slatkis_id'    => Field::readOnlyUnsignedInteger(15)
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
}
