<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemDonationRequest;
use App\Models\Giver;
use App\Models\Item;
use App\Models\ItemDonation;
use App\Services\GiverService;
use App\Services\ItemDonationService;
use App\Services\ItemService;
use Illuminate\Http\Request;

class ItemDonationController extends Controller
{
    public $itemDonationService;
    public $itemService;
    public $giverService;

    /**
     * ItemDonationController constructor.
     * @param $itemDonationService
     * @param $item
     * @param $giver
     */
    public function __construct
    (
        ItemDonationService $itemDonationService ,
        ItemService $itemService ,
        GiverService $giverService)
    {
        $this->itemDonationService = $itemDonationService;
        $this->itemService = $itemService;
        $this->giverService = $giverService;
    }


    public function index()
    {
        $itemDonations = $this->itemDonationService->getMoneyDonationsWithGivers();

        return view('dashboard.donation-items.index' , compact('itemDonations'));
    }

    public function create()
    {
        $items = $this->itemService->getItems();
        $givers = $this->giverService->getAllGivers();
        return view('dashboard.donation-items.create' , compact('items' , 'givers'));
    }

    public function store(ItemDonationRequest $request)
    {
        $dto = $request->getDto();

        $this->itemDonationService->storeItemDonation($dto);

        $item = $this->itemService->getItemByID($request->item_id);
        $org = $item->quantity;

        $item->update
        ([
           'quantity' => $org + $request->quantity,
        ]);

        return redirect()->route('donation.item.index');
    }
}
