<?php

namespace App\Repositories;

use App\Dto\ItemDistributionDto;
use App\Dto\MoneyDistributionDto;
use App\Models\Giver;
use App\Models\ItemDistribution;
use App\Models\MoneyDistribution;
use App\Models\MoneyDonation;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\ItemDistributionRepositoryInterface;
use App\Repositories\Interfaces\MoneyDistributionRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;

class ItemDistributionRepository implements ItemDistributionRepositoryInterface
{
    public function getItemDistributions()
    {
        return ItemDistribution::get();
    }

    public function storeItemDistribution(ItemDistributionDto $dto)
    {
        ItemDistribution::create($dto->toArray());
    }
}
