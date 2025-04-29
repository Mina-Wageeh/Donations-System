<?php

namespace App\Repositories;

use App\Models\Giver;
use App\Models\Institution;
use App\Repositories\Interfaces\InstitutionRepositoryInterface;
use App\Repositories\Interfaces\GiverRepositoryInterface;

class InstitutionRepository implements InstitutionRepositoryInterface
{
    public function getInstitutions()
    {
        return Institution::all();
    }

    public function getInstitutionsCount()
    {
        return Institution::count();
    }
}
