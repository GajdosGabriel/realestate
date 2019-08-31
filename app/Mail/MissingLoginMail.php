<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Auth;

class MissingLoginMail extends Mailable {
    use Queueable, SerializesModels;

    public $user;

    public function __construct($user) {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->replyTo('lukas@cee-realestate.com')
            ->subject('Missing login')
            ->view('mail/missingLogin')
            ->with('user', $this->user);
    }
}
