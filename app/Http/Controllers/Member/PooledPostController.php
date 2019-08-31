<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Mail\ContactMail;
use Mail;

class PooledPostController extends Controller {
    public function form(Request $objRequest) {
        Auth::user()->assignRole('hni');

        // E-mail notification
        Mail::to('info@cee-realestate.com')->send(new ContactMail($objRequest->all()));

        flash('The form has been submitted.')->success();

        return back();
    }
}
