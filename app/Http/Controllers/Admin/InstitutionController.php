<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Services\InstitutionService;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public $institutionService;

    public function __construct(InstitutionService $institutionService)
    {
        $this->institutionService = $institutionService;
    }


    public function index()
    {
        $institutions = $this->institutionService->getInstitutions();
    }
}
