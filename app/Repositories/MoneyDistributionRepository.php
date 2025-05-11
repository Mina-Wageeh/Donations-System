<?php

namespace App\Repositories;

use App\Dto\MoneyDistributionDto;
use App\Models\Giver;
use App\Models\MoneyDistribution;
use App\Models\MoneyDonation;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\MoneyDistributionRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;
use Illuminate\Support\Facades\DB;

class MoneyDistributionRepository implements MoneyDistributionRepositoryInterface
{
    public function getMoneyDistributionsWithInstitutions()
    {
        return DB::table('money_distributions')
            ->join('institutions', 'money_distributions.institution_id', '=', 'institutions.id')
            ->select('institutions.name as institution_name', 'money_distributions.amount as amount')
            ->get();
    }

    public function StoreMoneyDistribution(MoneyDistributionDto $dto)
    {
        MoneyDistribution::create($dto->toArray());
    }

    public function getTotalMoneyDistributions()
    {
        return MoneyDistribution::sum('amount');
    }
}
