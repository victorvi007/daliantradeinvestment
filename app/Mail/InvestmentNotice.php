<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvestmentNotice extends Mailable
{
    use Queueable, SerializesModels;
    public $amount;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to(env('MAIL_FROM_ADDRESS'))->cc('admin@daliantradeinvestment.com') ->markdown('mail.adminInvestmentNotice');
    }
}
