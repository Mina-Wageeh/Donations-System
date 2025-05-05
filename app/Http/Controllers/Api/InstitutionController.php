<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InstitutionRequest;
use App\Models\Institution;
use App\Services\InstitutionService;
use App\Services\Interfaces\InstitutionServiceInterface;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public $institutionService;

    public function __construct(InstitutionServiceInterface $institutionService)
    {
        $this->institutionService = $institutionService;
    }


    public function index()
    {
        $institutions = $this->institutionService->getInstitutions();
        return response()->json(['data' => $institutions]);
    }

}
