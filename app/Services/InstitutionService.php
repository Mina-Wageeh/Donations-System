<?php


namespace App\Services;


use App\Dto\InstitutionDto;
use App\Models\Institution;
use App\Repositories\InstitutionRepository;
use App\Repositories\GiverRepository;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\InstitutionRepositoryInterface;
use App\Services\Interfaces\InstitutionServiceInterface;

class InstitutionService implements InstitutionServiceInterface
{
    public $institutionRepository;

    public function __construct(InstitutionRepositoryInterface $institutionRepository)
    {
        $this->institutionRepository = $institutionRepository;
    }

    public function getInstitutions()
    {
        return $this->institutionRepository->getInstitutions();
    }

    public function getInstitutionByID($id)
    {
        return $this->institutionRepository->getInstitutionByID($id);
    }

    public function getInstitutionsCount()
    {
        return $this->institutionRepository->getInstitutionsCount();
    }

    public function storeInstitution(InstitutionDto $dto)
    {
        $this->institutionRepository->storeInstitution($dto);
    }

    public function updateInstitution(InstitutionDto $dto , $id)
    {
        $this->institutionRepository->updateInstitution($dto , $id);
    }

    public function deleteInstitution($id)
    {
        $this->institutionRepository->deleteInstitution($id);
    }

}
