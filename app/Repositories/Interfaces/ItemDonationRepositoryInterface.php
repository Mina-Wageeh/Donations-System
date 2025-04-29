<?php


namespace App\Repositories\Interfaces;


interface ItemDonationRepositoryInterface
{

    public function getItemDonations();

    public function storeItemDonation($data);

}
