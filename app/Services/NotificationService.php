<?php

namespace App\Services;

use App\Mail\CheckDonationsMail;
use App\Services\Interfaces\NotificationServiceInterface;
use Illuminate\Support\Facades\Mail;

class NotificationService implements NotificationServiceInterface
{
    public function sendMail()
    {
        Mail::to('admin@admin.com')->send(new CheckDonationsMail());
    }
}
