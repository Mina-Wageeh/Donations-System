<?php


namespace App\Repositories\Interfaces;


use App\Dto\GiverDto;
use Illuminate\Support\Collection;

interface GiverRepositoryInterface
{
    public function getAllGivers(): Collection;

    public function getGiversCount();

    public function storeGiver(GiverDto $dto);

    public function getGiverById($id);

    public function updateGiver(GiverDto $dto , int $id);
}
