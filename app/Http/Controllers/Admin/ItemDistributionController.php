<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemDistributionRequest;
use App\Models\ItemDistribution;
use App\Services\Interfaces\InstitutionServiceInterface;
use App\Services\Interfaces\ItemDistributionServiceInterface;
use App\Services\Interfaces\ItemServiceInterface;
use Illuminate\Http\Request;

class ItemDistributionController extends Controller
{
    public $itemDistributionService;
    public $institutionService;
    public $itemService;

    public function __construct(InstitutionServiceInterface $institutionService , ItemServiceInterface $itemService , ItemDistributionServiceInterface $itemDistributionService)
    {
        $this->itemDistributionService = $itemDistributionService;
        $this->institutionService = $institutionService;
        $this->itemService = $itemService;
    }


    public function index()
    {
        return view('dashboard.item-distribution.index');
    }

    public function create()
    {
        $institutions = $this->institutionService->getInstitutions();
        $items = $this->itemService->getItems();
        return view('dashboard.item-distribution.create' , compact('institutions' , 'items'));
    }

    public function store(ItemDistributionRequest $request)
    {
        $dto = $request->getDto();

        $this->itemDistributionService->StoreItemDistribution($dto);

        return redirect()->route('item.distribution.index');
    }
}
