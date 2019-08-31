<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\CertificationMail;

class CertificationPostController extends Controller {
    public function submit(Request $objRequest) {
        Mail::to('info@cee-realestate.com')->send(new CertificationMail($objRequest));

        flash('Thank you for submitting your Certification.')->success();

        return back();
    }
}