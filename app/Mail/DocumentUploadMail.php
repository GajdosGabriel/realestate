<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Auth;

class DocumentUploadMail extends Mailable {
    use Queueable, SerializesModels;

    public $objDocument;

    public function __construct($objDocument) {
        $this->objDocument = $objDocument;
    }

    public function build() {
        return $this->replyTo(Auth::user()->email)
            ->subject('CEE Document upload')
            ->view('mail/document_upload')
            ->with('objDocument', $this->objDocument);
    }
}
