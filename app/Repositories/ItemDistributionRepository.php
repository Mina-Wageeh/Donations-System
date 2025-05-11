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
use Illuminate\Support\Facades\DB;

class ItemDistributionRepository implements ItemDistributionRepositoryInterface
{
    public function getItemDistributions()
    {
        return ItemDistribution::get();
    }

    public function getItemDistributionsWithInstitutions()
    {
        return DB::table('item_distributions')
            ->join('institutions', 'item_distributions.institution_id', '=', 'institutions.id')
            ->join('items', 'item_distributions.item_id', '=', 'items.id')
            ->select
            (
                'institutions.name as institution_name',
                'items.name as item_name',
                'item_distributions.quantity as item_quantity',
            )
            ->get();
    }

    public function storeItemDistribution(ItemDistributionDto $dto)
    {
        ItemDistribution::create($dto->toArray());
    }

}
