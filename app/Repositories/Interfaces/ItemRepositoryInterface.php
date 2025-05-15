<?php


namespace App\Repositories\Interfaces;


interface ItemRepositoryInterface
{
    public function getItems();

    public function getGiversCount(): int;

    public function storeItem($data);

    public function getItemByID($id);
}
