<?php

namespace App\Repositories;

use App\Models\Giver;
use App\Models\Item;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\ItemRepositoryInterface;

class ItemRepository implements ItemRepositoryInterface
{
    public function getItems()
    {
        return Item::all();
    }

    public function storeItem($data)
    {
        Item::create($data);
    }

    public function getItemByID($id)
    {
        return Item::find($id);
    }

}
