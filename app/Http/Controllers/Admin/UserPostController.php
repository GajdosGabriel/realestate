<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Classes\iContact;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\BankDetailsRequest;
use App\BankDetails;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class UserPostController extends Controller {
    public function new(UserRequest $objRequest) {
        $objUser = User::create([
            'name' => $objRequest->name,
            'surname' => $objRequest->surname,
            'email' => $objRequest->email,
            'phone_code' => $objRequest->phone_code,
            'phone' => $objRequest->phone,
            'country' => $objRequest->country,
            'password' => Hash::make($objRequest->password),
        ]);

        $objUser->assignRole('admin-made');

        // Send User to iContact
        if ($objRequest->list == 'sk') iContact::addUser($objRequest->email, $objRequest->name, $objRequest->surname, $objRequest->password, 45199);
        else iContact::addUser($objRequest->email, $objRequest->name, $objRequest->surname, $objRequest->password);

        return redirect(route('admin.home'));
    }

    public function edit(UserEditRequest $objRequest) {
        $objUser = User::findOrFail($objRequest->id);
        $objUser->name = $objRequest->name;
        $objUser->surname = $objRequest->surname;
        $objUser->email = $objRequest->email;
        $objUser->phone_code = $objRequest->phone_code;
        $objUser->phone = $objRequest->phone;
        $objUser->country = $objRequest->country;
        $objUser->company = $objRequest->company;
        $objUser->url = $objRequest->url;
        if ($objRequest->password) $objUser->password = Hash::make($objRequest->password);
        $objUser->save();

        flash('User saved successfully.')->success();

        return back();
    }

    public function bank_details(BankDetailsRequest $objRequest) {
        if ($objRequest->id) {
            BankDetails::findOrFail($objRequest->id)->update($objRequest->all());
        }
        else {
            BankDetails::create($objRequest->all());
        }

        flash('Bank details saved successfully.')->success();

        return back();
    }

    public function status(Request $objRequest) {
        User::findOrFail($objRequest->id)->update($objRequest->all());

        flash('User status saved successfully.')->success();

        return back();
    }
}