<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\UserActivity;

class ProjectsController extends Controller {
    public function index() {
        UserActivity::logActivity(55);

        return view('member/projects/index');
    }

    public function renovations() {
        UserActivity::logActivity(48);

        return view('member/projects/renovations');
    }

    public function flldp() {
        UserActivity::logActivity(46);

        return view('member/projects/flldp');
    }

    public function ccrp() {
        UserActivity::logActivity(50);

        return view('member/projects/ccrp');
    }
	
    public function wrrp() {
        UserActivity::logActivity(54);

        return view('member/projects/wrrp');
    }
}