<?php


namespace App\Services;


use App\Dto\GiverDto;
use App\Models\Giver;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Services\Interfaces\GiverServiceInterface;

class GiverService implements GiverServiceInterface
{
    private GiverRepositoryInterface $giverRepository;

    public function __construct(GiverRepositoryInterface $giverRepository)
    {
        $this->giverRepository = $giverRepository;
    }

    public function getAllGivers()
    {
       return $this->giverRepository->getAllGivers();
    }

    public function getGiverById($id)
    {
        return $this->giverRepository->getGiverById($id);
    }


    public function getGiversCount()
    {
        return $this->giverRepository->getGiversCount();
    }


    public function storeGiver(GiverDto $dto)
    {
        $this->giverRepository->storeGiver($dto);
    }

    public function updateDoctor($dto , $id)
    {
        $this->giverRepository->updateDoctor($dto , $id);
    }

    public function deleteGiver($id)
    {
        $giver = $this->giverRepository->getGiverById($id);

        if($giver)
        {
            $delete = $giver -> delete();
            if($delete)
            {
                return response() -> json(['status' => 'ok']);
            }
        }
    }
}
