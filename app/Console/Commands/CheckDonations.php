<?php

namespace App\Console\Commands;


use App\Services\Interfaces\CheckDonationsServiceInterface;
use App\Services\Interfaces\ItemDonationServiceInterface;
use App\Services\Interfaces\MoneyDonationServiceInterface;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckDonations extends Command
{
    protected $signature = 'check:donations';

    protected $description = 'Check if no donations (money or items) happened in the last 7 days, and email admin';

    public function __construct
    (
        private CheckDonationsServiceInterface $checkDonationsCommandService,
    )
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->checkDonationsCommandService->checkDonationsLastWeek();
    }
}
