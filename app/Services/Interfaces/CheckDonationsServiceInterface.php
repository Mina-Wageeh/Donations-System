<?php


namespace App\Services\Interfaces;


use App\Dto\GiverDto;

interface CheckDonationsServiceInterface
{
    public function checkDonationsLastWeek($moneyDonationsCount , $itemDonationsCount);
}
