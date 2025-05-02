<?php


namespace App\Services\Interfaces;


use App\Dto\GiverDto;

interface GiverServiceInterface
{
    public function getAllGivers();

    public function getGiverById($id);

    public function getGiversCount();

    public function storeGiver(GiverDto $dto);

    public function deleteGiver($id);

    public function updateDoctor(GiverDto $dto , $id);

}
