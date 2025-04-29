<?php


namespace App\Services;


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

    //decorator
    public function getInstitutionsCount()
    {
        return $this->institutionRepository->getInstitutionsCount();
    }

}
