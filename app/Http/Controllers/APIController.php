<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use App\User;
use App\Classes\Validators\APIValidator;
use Illuminate\Support\Facades\Hash;
use App\Classes\iContact;
use App\Classes\Country;
use Intervention\Image\Facades\Image;
use App\Article;
use Mail;

class APIController extends Controller {
    public function user(Request $objRequest) {
        $objValidator = APIValidator::userValidator($objRequest->all());
        if ($objValidator->fails()) return response()->json(['status' => 'error', 'message' => $objValidator->errors()->all()], 500);

        $arrData = $objRequest->all();

        // Name
        if (isset($arrData['full_name'])) {
            $arrData['name'] = explode(' ', $arrData['full_name'])[0] ?? '';
            $arrData['surname'] = explode(' ', $arrData['full_name'], 2)[1] ?? '';
        }

        $arrData['name'] = ucfirst(strtolower($arrData['name']));
        $arrData['surname'] = ucfirst(strtolower($arrData['surname']));

        // Phone
        $arrData['phone'] = str_replace([' ', '+', '-'], '', $arrData['phone']);

        // Password
        if (!isset($arrData['password'])) {
            $strPassword = User::generatePassword();
            $arrData['password'] = Hash::make($strPassword);
        }
        else {
            $strPassword = $arrData['password'];
            $arrData['password'] = Hash::make($arrData['password']);
        }

        // Country
        if (!isset($arrData['country'])) {
            $arrData['country'] = Country::phoneCodeToCountryCode($arrData['phone_code'] ?? '');
        }
        else $arrData['country'] = Country::countryNameToISO3($arrData['country']);

        $objUser = User::create($arrData);



        if ($objUser->id > 0) {

            // Assign roles
            if (isset($objRequest->roles)) {
                $arrRoles = explode(',', $objRequest->roles);
                foreach ($arrRoles as $strRole) {
                    $strRole = trim($strRole);

                    // FB split
                    if ($strRole == 'fb-bfs') {
                        $objLastUser = User::role(['fb-bfs', 'fb-ind'])->orderBy('id', 'DESC')->limit(1)->with('roles')->get()[0];
                        if ($objLastUser->hasRole('fb-bfs')) $strRole = 'fb-ind';
                    }

                    $objUser->assignRole($strRole);
                }
            }

            // Send to iContact
            if (isset($objRequest->roles) and in_array('fb-sk', explode(',', $objRequest->roles))) iContact::addUser($objUser->email, $objUser->name, $objUser->surname, $strPassword, 45199);
            else iContact::addUser($objUser->email, $objUser->name, $objUser->surname, $strPassword);

            $arrResponse['status'] = 'success';
            $arrResponse['data'] = $objUser;

            return response()->json($arrResponse);
        }
        else return response()->json(['status' => 'error', 'message' => 'Something went wrong.'], 500);
    }

    public function resize_image(Request $objRequest) {
        Image::make($objRequest->image->path())
            ->widen(1200)
            ->save();

        $objRequest->file('image')
            ->move(public_path("/uploads/articles"), date('Y-m-d_H:i:s', time()) . '.jpg');

        return 'https://www.cee-realestate.com/uploads/articles/' . date('Y-m-d_H:i:s', time()) . '.jpg';
    }

    public function news() {
        return Article::orderBy('id', 'desc')
            ->limit(5)
            ->get();
    }
}