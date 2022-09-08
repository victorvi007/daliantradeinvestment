<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreditTransaction extends Mailable
{
    use Queueable, SerializesModels;
    public $name,$amount;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$amount)
    {
        $this->name = $name;
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))->cc('noreply@daliantradeinvestment.com')->markdown('mail.creditTransaction');
    }
}
