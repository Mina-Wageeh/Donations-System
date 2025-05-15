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
use App\Services\Interfaces\ItemDonationServiceInterface;
use App\Services\Interfaces\MoneyDonationServiceInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class CheckDonationsService implements CheckDonationsServiceInterface
{
    public function __construct
    (
        private MoneyDonationServiceInterface $moneyDonationService,
        private ItemDonationServiceInterface $itemDonationService
    )
    {
    }

    public function checkDonationsLastWeek()
    {
        $duration = Carbon::now()->subMinutes(1);
        $moneyDonationsCount = $this->moneyDonationService->moneyDonationsCountInSpecificDuration($duration);
        $itemDonationsCount = $this->itemDonationService->itemDonationsCountInSpecificDuration($duration);
        if ($moneyDonationsCount === 0 && $itemDonationsCount === 0)
        {
            dispatch(new SendMailJob());
        }
    }
}
