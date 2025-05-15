<?php

namespace App\Jobs;

use App\Mail\CheckDonationsMail;
use App\Services\Interfaces\NotificationServiceInterface;
use App\Services\NotificationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private NotificationServiceInterface $notification;

    public function handle(NotificationServiceInterface $notification)
    {
        $this->notification = $notification;
        $this->notification->sendMail();
    }
}
