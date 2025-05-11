<?php


namespace App\Services;


use App\Models\Item;
use App\Repositories\GiverRepository;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\ItemRepositoryInterface;
use App\Repositories\ItemRepository;
use App\Services\Interfaces\ItemServiceInterface;

class ItemService implements ItemServiceInterface
{
    public $itemRepository;

    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    public function getItems()
    {
        return $this->itemRepository->getItems();
    }

    public function storeItem($data)
    {
        $this->itemRepository->storeItem($data);
    }

    public function getItemByID($id)
    {
        return $this->itemRepository->getItemByID($id);
    }

}
