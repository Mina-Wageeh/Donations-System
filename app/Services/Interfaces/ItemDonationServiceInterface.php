<?php


namespace App\Services\Interfaces;


interface ItemDonationServiceInterface
{

    public function getItemDonations();

    public function storeItemDonation($data);

}
