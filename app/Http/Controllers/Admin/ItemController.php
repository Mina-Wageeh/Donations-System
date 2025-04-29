<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Services\ItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public $itemService;

    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }


    public function index()
    {
        $items = $this->itemService->getItems();
        return view('dashboard.items.index' , compact('items'));
    }

    public function create()
    {
        return view('dashboard.items.create');
    }

    public function store(Request $request)
    {
        $data =
        [
            'name' => $request->name,
            'quantity' => $request->quantity,
        ];

        $this->itemService->storeItem($data);

        return redirect()->route('item.index');


    }
}
