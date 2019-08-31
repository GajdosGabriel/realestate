<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Validators\PublicValidator;
use Mail;
use App\Mail\ContactMail;

class PublicPostController extends Controller {
    public function contact(Request $objRequest) {
        $data = $objRequest->all();

        $data['name'] = $objRequest->contactName ?? $objRequest->contactName;
        $data['surname'] = $objRequest->contactSurname ?? $objRequest->contactSurname;
        $data['email'] = $objRequest->contactEmail ?? $objRequest->contactEmail;
        $data['phone_code'] = $objRequest->contactPhoneCode ?? $objRequest->contactPhoneCode;
        $data['phone'] = $objRequest->contactPhone ?? $objRequest->contactPhone;

        $objValidator = PublicValidator::contactValidator($data);
        if ($objValidator->fails()) return back()->withErrors($objValidator)->withInput()->with('modal', 'contact');

        Mail::to('info@cee-realestate.com')->send(new ContactMail($data));

        flash('Your message has been sent successfully.')->success();

        return back();
    }

    public function cookies(Request $objRequest) {
        setcookie('laravel_cookie_consent', 1, time() + (86400 * 365), '/');

        if (!isset($objRequest->adroll)) setcookie('cee_adroll', 0, time() + (86400 * 365), '/');

        if (!isset($objRequest->fb)) setcookie('cee_fb', 0, time() + (86400 * 365), '/');

        if (!isset($objRequest->gl)) setcookie('cee_gl', 0, time() + (86400 * 365), '/');

        if (!isset($objRequest->chat)) setcookie('cee_chat', 0, time() + (86400 * 365), '/');

        return redirect('/');
    }
}