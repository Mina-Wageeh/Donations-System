<?php


namespace App\Repositories\Interfaces;


use App\Dto\InstitutionDto;

interface InstitutionRepositoryInterface
{
    public function getInstitutions();

    public function getInstitutionByID($id);

    public function getInstitutionsCount();

    public function storeInstitution(InstitutionDto $dto);

    public function updateInstitution(InstitutionDto $dto , $id);

    public function deleteInstitution($id);
}
