<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\UserActivity;
use Illuminate\Support\Facades\Cookie;
use DB;

class LoginController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/member';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    // Custom redirection in case of failed login
    protected function sendFailedLoginResponse(Request $request) {
        return back()
            ->with('modal', 'login')
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => __('auth.failed'),
            ]);
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  mixed $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user) {
        DB::transaction(function () use ($user) {
            UserActivity::logActivity(1);
        }, 3);

        Cookie::queue('cee_track', $user->id, 60*24*30);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request) {
        UserActivity::logActivity(2);

        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
