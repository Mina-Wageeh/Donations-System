<?php


namespace App\Services;


use App\Dto\GiverDto;
use App\Models\Giver;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Services\Interfaces\GiverServiceInterface;
use Illuminate\Support\Collection;

class GiverService implements GiverServiceInterface
{
    private GiverRepositoryInterface $giverRepository;

    public function __construct(GiverRepositoryInterface $giverRepository)
    {
        $this->giverRepository = $giverRepository;
    }

    public function getAllGivers(): Collection
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

    public function updateGiver($dto , $id)
    {
        $this->giverRepository->updateGiver($dto , $id);
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
