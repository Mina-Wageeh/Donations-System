<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CheckDonationsMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function envelope()
    {
        return new Envelope
        (
            subject: 'No Donations In Last Week',
        );
    }

    public function content()
    {
        return new Content
        (
            view: 'emails.no-donations',
        );
    }

    public function attachments()
    {
        return [];
    }
}
