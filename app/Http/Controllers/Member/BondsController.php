<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BondsController extends Controller {
    public function index() {
        return view('member/bonds/index');
    }

    public function portfolio() {
        return view('member/bonds/portfolio');
    }

    public function financials() {
        return view('member/bonds/financials');
    }

    public function partner() {
        return view('member/bonds/partner');
    }

    public function tac() {
        return view('member/bonds/tac');
    }

    public function buy() {
        return view('member/bonds/buy');
    }
}
