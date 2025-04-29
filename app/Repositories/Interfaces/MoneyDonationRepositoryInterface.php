<?php


namespace App\Repositories\Interfaces;


//institution
interface MoneyDonationRepositoryInterface
{
    public function getMoneyDonations();
    public function getTotalMoneyDonations();
    public function StoreMoneyDonation($data);

}
