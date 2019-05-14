<?php
namespace App\Models;

use App\Core\Model;

class SlikaModel extends Model
{
    public function getByName(string $slikaName)
    {
        return $this->getByFieldName('naziv', $slikaName);
    }

    public function getAllBySlatkisId(int $slatkisId): array
    {
        return $this->getAllByFieldName('slatkis_id', $slatkisId);
    }
}
