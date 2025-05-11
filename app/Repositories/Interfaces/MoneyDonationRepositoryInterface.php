<?php


namespace App\Repositories\Interfaces;


use App\Dto\MoneyDonationDto;

interface MoneyDonationRepositoryInterface
{
    public function getMoneyDonations();
    public function getMoneyDonationsWithGivers();
    public function getTotalMoneyDonations();
    public function StoreMoneyDonation(MoneyDonationDto $dto);
    public function moneyDonationsCountInSpecificDuration($duration);

}
