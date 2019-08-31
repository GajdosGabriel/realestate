<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\UserActivity;

class RealizedController extends Controller {
    public function index() {
        UserActivity::logActivity(31);

        return view('member/realized/index');
    }

    public function renovation_project_house1() {
        UserActivity::logActivity(37);

        return view('member/realized/renovation_project_house1');
    }

    public function renovation_project_house2() {
        UserActivity::logActivity(42);

        return view('member/realized/renovation_project_house2');
    }

    public function renovation_project_house3() {
        UserActivity::logActivity(39);

        return view('member/realized/renovation_project_house3');
    }

    public function recreational_new_development_project() {
        UserActivity::logActivity(21);

        return view('member/realized/recreational_new_development_project');
    }
}