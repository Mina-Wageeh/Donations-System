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
        $itemDistributions = $this->itemDistributionService->getItemDistributionsWithInstitutions();
        return view('dashboard.item-distribution.index' , compact('itemDistributions'));
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

        $item = $this->itemService->getItemByID($request->item_id);
        $org = $item->quantity;

        $distributedAmount = $request->quantity;

        if ($distributedAmount < $org)
        {
            $this->itemDistributionService->StoreItemDistribution($dto);

            $item->update
            ([
                'quantity' => $org - $request->quantity,
            ]);

            return redirect()->route('item.distribution.index');
        }
        else
        {
            return redirect()->back()->with('warning', 'الكمية المتاحة غير كافية للتوزيع.');
        }


    }
}
