<?php

namespace App\Repositories;

use App\Models\Giver;
use App\Models\MoneyDonation;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;

class MoneyDonationRepository implements MoneyDonationRepositoryInterface
{
    public function getMoneyDonations()
    {
       return MoneyDonation::all();
    }

    public function getTotalMoneyDonations()
    {
       return MoneyDonation::sum('amount');
    }

    public function StoreMoneyDonation($data)
    {
        MoneyDonation::create($data);
    }
}
