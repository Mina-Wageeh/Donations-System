<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public $item;
    public $giver;

    /**
     * ItemDonationController constructor.
     * @param $itemDonationService
     * @param $item
     * @param $giver
     */
    public function __construct(ItemDonationService $itemDonationService , ItemService $item , GiverService $giver)
    {
        $this->itemDonationService = $itemDonationService;
        $this->item = $item;
        $this->giver = $giver;
    }


    public function index()
    {
        $itemDonations = $this->itemDonationService->getItemDonations();

        return view('dashboard.donation-items.index' , compact('itemDonations'));
    }

    public function create()
    {
        $items = $this->item->getItems();
        $givers = $this->giver->getAllGivers();
        return view('dashboard.donation-items.create' , compact('items' , 'givers'));
    }

    public function store(Request $request)
    {
        $data =
        [

            'giver_id' => $request->giver_id,
            'item_id' => $request->item_id,
            'quantity' => $request->quantity,
        ];

        $this->itemDonationService->storeItemDonations($data);

        return redirect()->route('donation.item.index');


    }
}
