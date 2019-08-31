<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserActivity;

class DevelopmentsController extends Controller {
    public function index() {
        UserActivity::logActivity(7);

        return view('member/developments/index');
    }

    public function sirava() {
        UserActivity::logActivity(17);

        return view('member/developments/sirava');
    }

    public function kittsee() {
        UserActivity::logActivity(18);

        return view('member/developments/kittsee');
    }

    public function brezany() {
        UserActivity::logActivity(19);

        return view('member/developments/brezany');
    }
}
