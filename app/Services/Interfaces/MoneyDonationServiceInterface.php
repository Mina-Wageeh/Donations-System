<?php


namespace App\Services\Interfaces;


use App\Dto\MoneyDonationDto;

interface MoneyDonationServiceInterface
{
    public function getMoneyDonations();
    public function getMoneyDonationsWithGivers();
    public function getTotalMoneyDonations();
    public function StoreMoneyDonation(MoneyDonationDto $dto);
    public function moneyDonationsCountInSpecificDuration($duration);

}
