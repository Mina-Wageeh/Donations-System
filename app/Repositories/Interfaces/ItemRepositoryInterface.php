<?php


namespace App\Repositories\Interfaces;


interface ItemRepositoryInterface
{
    public function getItems();

    public function storeItem($data);
}
