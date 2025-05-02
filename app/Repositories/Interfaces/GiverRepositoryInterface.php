<?php


namespace App\Repositories\Interfaces;


use App\Dto\GiverDto;

interface GiverRepositoryInterface
{
    public function getAllGivers();

    public function getGiversCount();

    public function storeGiver(GiverDto $dto);

    public function getGiverById($id);

    public function updateDoctor(GiverDto $dto , $id);
}
