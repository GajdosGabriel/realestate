<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class RolePostController extends Controller {
    public function user_roles(Request $objRequest) {
        $objUser = User::findOrFail($objRequest->user_id);

        $objUser->syncRoles($objRequest->roles ?? []);

        flash('Roles have been saved.')->success();

        return back();
    }
}