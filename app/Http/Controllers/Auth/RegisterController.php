<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Classes\iContact;
use App;
use Mail;
use App\Mail\RegisterMail;
use App\UserActivity;
use App\Classes\Country;
use Illuminate\Support\Facades\Cookie;
use Session;

class RegisterController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'full_name' => 'required|string|min:5|max:80',
            'registerEmail' => 'required|string|email|max:70|unique:users,email',
            'phone_code' => 'required|string|min:1|max:4',
            'phone' => 'required|string|max:20',
            'registerPassword' => 'required|string|min:8|max:20',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data) {

        // Parse name & country
        $strName = explode(' ', $data['full_name'])[0] ?? '';
        $strSurname = explode(' ', $data['full_name'], 2)[1] ?? '';

        $strCountry = Country::phoneCodeToCountryCode($data['phone_code']);

        $arrAttributes = [
            'name' => $strName,
            'surname' => $strSurname,
            'email' => $data['registerEmail'],
            'phone_code' => $data['phone_code'],
            'phone' => str_replace([' ', '+', '-', '/'], '', $data['phone']),
            'country' => $strCountry,
            'password' => Hash::make($data['registerPassword']),
        ];

        // Get referral ID
        if (Cookie::has('cee_ref')) $arrAttributes['referral_id'] = Cookie::get('cee_ref');

        $objUser = User::create($arrAttributes);

        // Assign Roles
        if (Cookie::has('cee_roles')) {
            $arrRoles = explode(',', Cookie::get('cee_roles'));
            $arrRoles = array_diff($arrRoles, ['admin', 'agent']);

            foreach ($arrRoles as $strRole) {
                if ($strRole == 'lp-google' and in_array($objUser->country, ['SVK', 'CZE', 'HUN'])) $arrRoles2[] = 'lp-google-sk';
                else $arrRoles2[] = $strRole;
            }

            $objUser->assignRole($arrRoles2);
        }
        else {
            if (in_array($objUser->country, ['SVK', 'CZE', 'HUN'])) $objUser->assignRole('signup-sk');
            else $objUser->assignRole('signup');
        }

        // Send User to iContact
        if (Cookie::has('cee_roles') and in_array('adroll-sk', explode(',', Cookie::get('cee_roles')))) iContact::addUser($data['registerEmail'], $strName, $strSurname, $data['registerPassword'], 45199);
        else iContact::addUser($data['registerEmail'], $strName, $strSurname, $data['registerPassword']);

        // Keep sessions
        if (Session::has('lp-lg-bfs')) Session::keep('lp-lg-bfs');

        return $objUser;
    }

    public function register(Request $request) {
        $validator = $this->validator($request->all());

        // Custom redirection in case of failed registration
        if ($validator->fails()) {
            return back()
                ->with('modal', 'register')
                ->withErrors($validator)
                ->withInput();
        } else $validator->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  mixed $user
     * @return mixed
     */
    protected function registered(Request $request, $user) {
        Mail::to('info@cee-realestate.com')->send(new RegisterMail($user));

        Cookie::queue('cee_track', $user->id, 60*24*30);

        UserActivity::logActivity(1);
    }
}
