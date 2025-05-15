<?php

namespace App\Repositories;

use App\Dto\InstitutionDto;
use App\Models\Institution;
use App\Repositories\Interfaces\InstitutionRepositoryInterface;
use Illuminate\Support\Collection;

class InstitutionRepository implements InstitutionRepositoryInterface
{
    public function getInstitutions(): Collection
    {
        return Institution::all();
    }

    public function getInstitutionByID($id): ?Institution
    {
        return Institution::find($id);
    }

    public function getInstitutionsCount(): int
    {
        return Institution::count();
    }

    public function storeInstitution(InstitutionDto $dto): Institution
    {
        return Institution::create($dto->toArray());
    }

    public function updateInstitution(InstitutionDto $dto , $id): Institution
    {
        $institution = $this->getInstitutionByID($id);
        if($institution)
        {
            $institution->update($dto->toArray());
        }
    }

    public function deleteInstitution($id): void
    {
        $institution = $this->getInstitutionByID($id);

        if($institution)
        {
            $institution -> delete();
        }
    }

}
