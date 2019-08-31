<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserActivity;
use App\Article;

class HotController extends Controller {
    public function renovations() {
        UserActivity::logActivity(48);

        return view('member/hot/renovations');
    }

    public function flldp() {
        UserActivity::logActivity(46);

        return view('member/hot/flldp');
    }

    public function ccrp() {
        UserActivity::logActivity(50);

        return view('member/hot/ccrp');
    }
	
    public function wrrp() {
        UserActivity::logActivity(54);

        return view('member/hot/wrrp');
    }
}
