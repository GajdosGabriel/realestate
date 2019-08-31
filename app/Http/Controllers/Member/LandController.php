<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserActivity;

class LandController extends Controller {
    public function index() {
        UserActivity::logActivity(6);

        return view('member/land/index');
    }

    public function sirava() {
        UserActivity::logActivity(15);

        return view('member/land/sirava');
    }

    public function sirava2() {
        UserActivity::logActivity(14);

        return view('member/land/sirava2');
    }

    public function budapest() {
        UserActivity::logActivity(16);

        return view('member/land/budapest');
    }
}
