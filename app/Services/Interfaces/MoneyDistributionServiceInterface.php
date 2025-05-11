<?php


namespace App\Services\Interfaces;


use App\Dto\MoneyDistributionDto;
use App\Dto\MoneyDonationDto;

interface MoneyDistributionServiceInterface
{
    public function getMoneyDistributionsWithInstitutions();

    public function StoreMoneyDistribution(MoneyDistributionDto $dto);

    public function getTotalMoneyDistributions();
}
