<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\UserActivity;

class PartnerController extends Controller {
    public function index() {
        UserActivity::logActivity(4);

        return view('member/partner/index');
    }

    public function marketing_materials() {
        UserActivity::logActivity(33);

        return view('member/partner/marketing_materials');
    }

    public function your_signups() {
        UserActivity::logActivity(34);

        // Users
        $arrUsers = User::where('referral_id', Auth::user()->id)
            ->orderBy('id', 'DESC')
            ->doesntHave('orders')
            ->with(['note', 'roles'])
            ->get();

        // Investors
        $arrInvestors = User::where('referral_id', Auth::user()->id)
            ->orderBy('id', 'DESC')
            ->has('orders')
            ->with(['note', 'roles'])
            ->get();

        // Recent logins
        $arrRecentLogins = UserActivity::where('activity_id', 1)
            ->whereHas('user', function($base) {
                $base->where('referral_id', Auth::user()->id);
            })->orderBy('id', 'DESC')
            ->limit(10)
            ->with(['user.referral', 'user.roles', 'user.note'])
            ->get();

        return view('member/partner/your_signups')->with([
            'arrUsers' => $arrUsers,
            'arrInvestors' => $arrInvestors,
            'arrRecentLogins' => $arrRecentLogins
        ]);
    }

    public function html_banners() {
        UserActivity::logActivity(35);

        return view('member/partner/html_banners');
    }

    public function fb_banners() {
        UserActivity::logActivity(36);

        return view('member/partner/fb_banners');
    }

    public function email_banner($id) {
        return view('member/partner/email_templates/' . $id);
    }
}