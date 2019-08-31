<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\UserActivity;


class PooledController extends Controller {
    public function index() {
        UserActivity::logActivity(22);

        return view('member/pooled/index');
    }
}
