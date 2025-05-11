<?php


namespace App\Repositories\Interfaces;

use App\Dto\MoneyDistributionDto;

interface MoneyDistributionRepositoryInterface
{
    public function getMoneyDistributionsWithInstitutions();

    public function StoreMoneyDistribution(MoneyDistributionDto $dto);

    public function getTotalMoneyDistributions();
}
