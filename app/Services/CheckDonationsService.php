<?php


namespace App\Services;

use App\Dto\GiverDto;
use App\Jobs\SendMailJob;
use App\Mail\CheckDonationsMail;
use App\Models\Giver;
use App\Repositories\Interfaces\GiverRepositoryInterface;
use App\Repositories\Interfaces\ItemDonationRepositoryInterface;
use App\Repositories\Interfaces\MoneyDonationRepositoryInterface;
use App\Services\Interfaces\CheckDonationsServiceInterface;
use App\Services\Interfaces\GiverServiceInterface;
use Illuminate\Support\Facades\Mail;

class CheckDonationsService implements CheckDonationsServiceInterface
{
    public function __construct()
    {

    }

    public function sendMail()
    {
        dispatch(new SendMailJob());
    }

    public function checkDonationsLastWeek($moneyDonationsCount , $itemDonationsCount)
    {
        if ($moneyDonationsCount === 0 && $itemDonationsCount === 0)
        {
            $this->sendMail();
        }
    }
}
