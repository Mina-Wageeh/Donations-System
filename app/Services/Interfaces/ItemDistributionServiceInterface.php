<?php


namespace App\Services\Interfaces;


use App\Dto\ItemDistributionDto;
use App\Dto\MoneyDistributionDto;
use App\Dto\MoneyDonationDto;

interface ItemDistributionServiceInterface
{
    public function getItemDistributions();
    public function storeItemDistribution(ItemDistributionDto $dto);
}
