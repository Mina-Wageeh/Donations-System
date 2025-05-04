<?php

namespace App\Repositories;

use App\Dto\InstitutionDto;
use App\Models\Institution;
use App\Repositories\Interfaces\InstitutionRepositoryInterface;

class InstitutionRepository implements InstitutionRepositoryInterface
{
    public function getInstitutions()
    {
        return Institution::all();
    }

    public function getInstitutionByID($id)
    {
        return Institution::find($id);
    }


    public function getInstitutionsCount()
    {
        return Institution::count();
    }

    public function storeInstitution(InstitutionDto $dto)
    {
        return Institution::create($dto->toArray());
    }

    public function updateInstitution(InstitutionDto $dto , $id)
    {
        $institution = $this->getInstitutionByID($id);
        if($institution)
        {
            $institution->update($dto->toArray());
        }
    }

    public function deleteInstitution($id)
    {
        $institution = $this->getInstitutionByID($id);

        if($institution)
        {
            $institution -> delete();
        }
    }

}
