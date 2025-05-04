<?php

namespace App\Http\Controllers\Admin;

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
        return view('dashboard.institutions.index' , compact('institutions'));
    }

    public function create()
    {
        return view('dashboard.institutions.create');
    }

    public function store(InstitutionRequest $request)
    {
        $dto = $request->getDto();

        $this->institutionService->storeInstitution($dto);

        return redirect()->route('institution.index');
    }

    public function edit($id)
    {
        $institution = $this->institutionService->getInstitutionByID($id);
        return view('dashboard.institutions.edit' , compact('institution'));
    }

    public function update(InstitutionRequest $request , $id)
    {
        $dto = $request->getDto();

        $this->institutionService->updateInstitution($dto , $id);

        return redirect()->route('institution.index');
    }

    public function delete(Request $request)
    {
        $institutionID = $request->institution_id;
        $this->institutionService->deleteInstitution($institutionID);
    }

}
