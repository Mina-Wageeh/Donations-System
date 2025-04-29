<?php


namespace App\Repositories\Interfaces;

use App\Dto\MoneyDistributionDto;

interface MoneyDistributionRepositoryInterface
{
    public function StoreMoneyDistribution(MoneyDistributionDto $dto);
}
