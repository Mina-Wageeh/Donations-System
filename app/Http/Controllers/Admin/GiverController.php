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

    public function __construct(GiverService $giverService)
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
       $this->giverService->storeGiver($request->getDto());

       return redirect()->route('giver.index');
    }

    public function delete(Request $request)
    {
        $giverID = $request->giver_id;
        $this->giverService->deleteGiver($giverID);
    }
}
