<?php

namespace App\Repositories;

use App\Dto\MoneyDonationDto;
use App\Models\Giver;
use App\Models\MoneyDonation;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;
use Illuminate\Support\Facades\DB;

class MoneyDonationRepository implements MoneyDonationRepositoryInterface
{
    public function getMoneyDonations()
    {
       return MoneyDonation::all();
    }

    public function getMoneyDonationsWithGivers()
    {
        return DB::table('money_donations')
               ->join('givers', 'money_donations.giver_id', '=', 'givers.id')
               ->select('givers.name as name', 'money_donations.amount as amount')
               ->get();
    }

    public function getTotalMoneyDonations()
    {
       return MoneyDonation::sum('amount');
    }

    public function StoreMoneyDonation(MoneyDonationDto $dto)
    {
        MoneyDonation::create($dto->toArray());
    }

    public function moneyDonationsCountInSpecificDuration($duration)
    {
        return MoneyDonation::where('creation_date', '>=', $duration)->count();
    }
}
