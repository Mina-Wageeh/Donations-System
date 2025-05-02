<?php

namespace App\Repositories;

use App\Dto\GiverDto;
use App\Models\Giver;
use App\Models\Item;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use Illuminate\Support\Collection;

class GiverRepository implements GiverRepositoryInterface
{
    public function getAllGivers(): Collection
    {
        return Giver::all();
    }

    public function getGiversCount(): int
    {
        return Giver::count();
    }

    public function storeGiver(GiverDto $dto)
    {
        return Giver::create($dto->toArray());
    }

    public function getGiverById($id)
    {
        return Giver::find($id);
    }

    public function updateDoctor(GiverDto $dto , $id)
    {
        $giver = $this->getGiverById($id);
        if($giver)
        {
            $giver->update($dto->toArray());
        }
    }

}
