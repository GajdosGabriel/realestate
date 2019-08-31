<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;

class OrderMail extends Mailable {
    use Queueable, SerializesModels;

    public $objOrder;

    public function __construct($objOrder) {
        $this->objOrder = $objOrder;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->replyTo($this->objOrder->email ?? Auth::user()->email)
            ->subject('CEE Order :: STEP 1')
            ->view('mail/order')
            ->with('objOrder', $this->objOrder);
    }
}
