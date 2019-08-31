<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CertificationMail extends Mailable {
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
        return $this->replyTo($this->objRequest->email)
            ->subject('CEE Self Certification')
            ->view('mail/certification')
            ->with('objRequest', $this->objRequest);
    }
}
