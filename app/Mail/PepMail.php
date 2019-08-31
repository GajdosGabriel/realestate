<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;

class PepMail extends Mailable {
    use Queueable, SerializesModels;

    public $arrData;

    public function __construct($arrData) {
        $this->arrData = $arrData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('mail/pep')
            ->from(Auth::user()->email)
            ->replyTo(Auth::user()->email)
            ->subject('CEE User PEP form')
            ->with([
            'data' => $this->arrData
        ]);
    }
}
