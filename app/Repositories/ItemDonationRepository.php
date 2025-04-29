<?php


namespace App\Repositories;


use App\Models\ItemDonation;
use App\Repositories\Interfaces\ItemDonationRepositoryInterface;

class ItemDonationRepository implements ItemDonationRepositoryInterface
{
    public function getItemDonations()
    {
        return ItemDonation::get();
    }

    public function storeItemDonation($data)
    {
        ItemDonation::create($data);
    }
}
