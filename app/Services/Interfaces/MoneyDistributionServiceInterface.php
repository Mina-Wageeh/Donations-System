<?php


namespace App\Services\Interfaces;


use App\Dto\MoneyDistributionDto;
use App\Dto\MoneyDonationDto;

interface MoneyDistributionServiceInterface
{
    public function StoreMoneyDistribution(MoneyDistributionDto $dto);
}
