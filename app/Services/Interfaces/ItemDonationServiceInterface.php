<?php

namespace App\Services\Interfaces;

use App\Dto\ItemDonationDto;

interface ItemDonationServiceInterface
{
    public function getItemDonations();

    public function getMoneyDonationsWithGivers();

    public function storeItemDonation(ItemDonationDto $dto);

    public function itemDonationsCountInSpecificDuration($duration);
}
