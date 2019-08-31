<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;

class TDOTempMail extends Mailable {
    use Queueable, SerializesModels;

    public $objRequest;

    public function __construct($objRequest) {
        $this->objRequest = $objRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->replyTo($this->objRequest->email ?? Auth::user()->email)
            ->subject('CEE Order :: TDO temporary order')
            ->view('mail/tdo_temp')
            ->with('objRequest', $this->objRequest);
    }
}
