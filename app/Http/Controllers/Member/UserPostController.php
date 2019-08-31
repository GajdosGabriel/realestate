<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserPostController extends Controller {
    public function status(Request $objRequest) {
        User::findOrFail($objRequest->id)->update($objRequest->all());

        flash('User status saved successfully.')->success();

        return back();
    }
}