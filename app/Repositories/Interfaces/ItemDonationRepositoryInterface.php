<?php

namespace App\Repositories\Interfaces;

use App\Dto\ItemDonationDto;

interface ItemDonationRepositoryInterface
{
    public function getItemDonations();

    public function getMoneyDonationsWithGivers();

    public function storeItemDonation(ItemDonationDto $dto);

    public function itemDonationsCountInSpecificDuration($duration);
}
