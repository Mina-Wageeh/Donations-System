<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GiverRequest;
use App\Models\Giver;
use App\Services\GiverService;
use App\Services\Interfaces\GiverServiceInterface;
use Illuminate\Http\Request;

class GiverController extends Controller
{
    public $giverService;

    public function __construct(GiverServiceInterface $giverService)
    {
        $this->giverService = $giverService;
    }

    public function index()
    {
        $givers = $this->giverService->getAllGivers();
        return view('dashboard.givers.index' ,compact('givers'));
    }

    public function create()
    {
        return view('dashboard.givers.create');
    }

    public function store(GiverRequest $request)
    {
        $dto = $request->getDto();
        $this->giverService->storeGiver($dto);
        return redirect()->route('giver.index');
    }

    public function edit($id)
    {
        $giver = $this->giverService->getGiverById($id);
        return view('dashboard.givers.edit' ,compact('giver'));
    }

    public function update(GiverRequest $request , $id)
    {
        $dto = $request->getDto();

        $this->giverService->updateDoctor($dto ,$id);

        return redirect() -> route('giver.index');
    }

    public function delete(Request $request)
    {
        $giverID = $request->giver_id;
        $this->giverService->deleteGiver($giverID);
    }
}
