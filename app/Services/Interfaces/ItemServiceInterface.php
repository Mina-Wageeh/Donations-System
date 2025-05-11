<?php


namespace App\Services\Interfaces;


interface ItemServiceInterface
{
    public function getItems();

    public function storeItem($data);

    public function getItemByID($id);
}
