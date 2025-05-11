<?php


namespace App\Services\Interfaces;


use App\Dto\ItemDistributionDto;
use App\Dto\MoneyDistributionDto;
use App\Dto\MoneyDonationDto;

interface ItemDistributionServiceInterface
{
    public function getItemDistributions();

    public function getItemDistributionsWithInstitutions();

    public function storeItemDistribution(ItemDistributionDto $dto);
}
