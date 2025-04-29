<?php

namespace App\Repositories;

use App\Dto\MoneyDistributionDto;
use App\Models\Giver;
use App\Models\MoneyDistribution;
use App\Models\MoneyDonation;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\MoneyDistributionRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;

class MoneyDistributionRepository implements MoneyDistributionRepositoryInterface
{
    public function StoreMoneyDistribution(MoneyDistributionDto $dto)
    {
        MoneyDistribution::create($dto->toArray());
    }
}
