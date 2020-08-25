<?php

namespace App\Http\Controllers;

use Config;
use Session;
use App;
use Illuminate\Support\Facades\Cookie;
use App\Order;
use App\Classes\Contracts\PRContract;
use App\Classes\Contracts\TDOContract;
use App\Classes\Contracts\TDO2Contract;
use App\Classes\Contracts\SPContract;
use App\UserActivity;

class PublicController extends Controller {

    public function index() {
        // Create roles cookie
        if (isset($_GET['roles'])) {
            Cookie::queue('cee_roles', $_GET['roles'], 60*24*30);

            if ($_GET['roles'] == 'lp-lg-bfs') Session::flash('lp-lg-bfs');
        }

        // Create referral cookie
        if (isset($_GET['ref'])) Cookie::queue('cee_ref', $_GET['ref'], 60*24*30);

        // Track unauthorised client
        if (Cookie::has('cee_track') and !in_array(Cookie::get('cee_track'), config('cee.ignored_users'))) {
            UserActivity::create([
                'user_id' => Cookie::get('cee_track'),
                'activity_id' => 61
            ]);
        }

        return view('public/index');
    }

    public function indexSK() {
        Session::put('appLocale', 'sk');
        App::setLocale('sk');

        // Create roles cookie
        if (isset($_GET['roles'])) {
            Cookie::queue('cee_roles', $_GET['roles'], 60*24*30);

            if ($_GET['roles'] == 'lp-lg-bfs') Session::flash('lp-lg-bfs');
        }

        // Create referral cookie
        if (isset($_GET['ref'])) Cookie::queue('cee_ref', $_GET['ref'], 60*24*30);

        // Track unauthorised client
        if (Cookie::has('cee_track') and !in_array(Cookie::get('cee_track'), config('cee.ignored_users'))) {
            UserActivity::create([
                'user_id' => Cookie::get('cee_track'),
                'activity_id' => 61
            ]);
        }

        return view('public/index');
    }

    public function terms_and_conditions() {
        Session::flash('modal', 'tac');

        return view('public/index');
    }

    public function privacy_policy() {
        Session::flash('modal', 'pp');

        return view('public/index');
    }

    public function risk_disclosure() {
        Session::flash('modal', 'rd');

        return view('public/index');
    }

    public function login() {
        Session::flash('modal', 'login');

        return view('public/index');
    }

    public function loginSK() {
        Session::put('appLocale', 'sk');
        App::setLocale('sk');

        Session::flash('modal', 'login');

        return view('public/index');
    }

    public function sign_up($lang = null) {
        if ($lang != null) {
            Session::put('appLocale', $lang);
            App::setLocale($lang);
        }

        if (isset($_GET['roles'])) {
            Cookie::queue('cee_roles', $_GET['roles'], 60*24*30);
        }

        Session::flash('modal', 'register');

        return view('public/index');
    }

    public function cookies() {
        return view('public/cookies');
    }

    public function lang($lang) {

        // Create referral cookie
        if (isset($_GET['ref'])) Cookie::queue('cee_ref', $_GET['ref'], 60*24*30);

        if (array_key_exists($lang, Config::get('language'))) {
            Session::put('appLocale', $lang);

            if (isset($_GET['roles'])) {
                Cookie::queue('cee_roles', $_GET['roles'], 60*24*30);
            }

            return back();
        }

        return redirect('/');
    }

    public function flldp($lang = null) {
        if ($lang != null) {
            Session::put('appLocale', $lang);
            App::setLocale($lang);
        }

        return view('public/flldp');
    }

    public function ccrp() {
        return view('public/ccrp');
    }

    public function wrrp() {
        return view('public/wrrp');
    }

    public function schon() {
        return view('public/schon');
    }

    public function liptov() {
        return view('public/liptov');
    }

    // Test page
    public function test() {
        $objOrder = Order::with(['company', 'joint', 'tdo.project'])->find(33);

        $objContract = new TDO2Contract($objOrder);
        return $objContract->output();
    }

    public function project() {
        return view('public/project');
    }

    public function home_box() {
        return view('public/home_box');
    }

    public function office2() {
        return view('public/office2');
    }

    public function nitra() {
        return view('public/nitra');
    }

    public function video() {
        return view('public/video');
    }

    public function videoSK() {
        Session::put('appLocale', 'sk');
        App::setLocale('sk');

        return view('public/video');
    }
}