<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserActivity;

class PropertiesController extends Controller {
    public function index() {
        UserActivity::logActivity(5);

        return view('member/properties/index');
    }

    public function managed_projects() {
        UserActivity::logActivity(11);

        return view('member/properties/managed_projects');
    }

    public function bratislava() {
        UserActivity::logActivity(12);

        return view('member/properties/bratislava');
    }

    public function bratislava_sell() {
        UserActivity::logActivity(13);

        return view('member/properties/bratislava_sell');
    }
}
