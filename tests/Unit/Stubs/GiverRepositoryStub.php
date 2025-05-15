<?php


namespace Stubs;


use App\Dto\GiverDto;
use App\Models\Giver;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use Illuminate\Support\Collection;

class GiverRepositoryStub implements GiverRepositoryInterface
{
    public function getAllGivers(): Collection
    {
        return collect
        ([
            new Giver(['name' => 'Ahmed']),
            new Giver(['name' => 'Mina']),
        ]);
    }

    public function getGiversCount()
    {
        return 2 ;
    }

    public function storeGiver(GiverDto $dto)
    {
        return new Giver($dto->toArray());
    }

    public function getGiverById($id)
    {
        return new Giver(['id' => $id, 'name' => 'Stub Giver']);
    }

    public function updateGiver(GiverDto $dto, int $id)
    {
        return new Giver(array_merge(['id' => $id], $dto->toArray()));
    }

}
