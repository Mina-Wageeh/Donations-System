<?php

namespace App\Console\Commands;

use App\Mail\CheckDonationsMail;
use App\Models\ItemDonation;
use App\Models\MoneyDonation;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CheckDonations extends Command
{

    protected $signature = 'check:donations';

    protected $description = 'Check if no donations (money or items) happened in the last 7 days, and email admin';

    public function handle()
    {
        $oneWeekAgo = Carbon::now()->subMinutes(1);

        $moneyDonationsCount = MoneyDonation::where('creation_date', '>=', $oneWeekAgo)->count();
        $itemDonationsCount = ItemDonation::where('creation_date', '>=', $oneWeekAgo)->count();

        if ($moneyDonationsCount === 0 && $itemDonationsCount === 0)
        {
            Mail::to('admin@admin.com')->send(new CheckDonationsMail());
            $this->info('No donations found. Email sent to admin.');
        }
        else
        {
            $this->info('Donations found within the last week. No email sent.');
        }

        return 0;
    }
}
