<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DalianTradeInvestment extends Mailable
{
    use Queueable, SerializesModels;
    public  $name,$username,$email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$username,$email)
    {
        $this->name = $name;
        $this->username=$username;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from(env('MAIL_FROM_ADDRESS'))->cc('admin@daliantradeinvestments.com')->markdown('mail.welcome');
    }
}
