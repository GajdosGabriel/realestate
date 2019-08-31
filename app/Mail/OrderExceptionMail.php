<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Auth;

class OrderExceptionMail extends Mailable {
    use Queueable, SerializesModels;

    public $objException;

    public function __construct($objException) {
        $this->objException = $objException;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->replyTo(Auth::user()->email)
            ->subject('CEE Order exception')
            ->view('mail/order_exception')
            ->with('objException', $this->objException);
    }
}
