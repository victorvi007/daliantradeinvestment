<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class dailyProfitDistribution extends Mailable
{
    use Queueable, SerializesModels;
    public $name,$amount,$asset;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$amount,$asset)
    {
       $this->name = $name;
       $this->amount = $amount;
       $this->asset = $asset;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))->cc('admin@daliantradeinvestment.com')->markdown('mail.profit');
    }
}
