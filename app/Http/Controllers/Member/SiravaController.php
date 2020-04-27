<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\UserActivity;
use App\Article;
use Illuminate\Support\Facades\Storage;

class SiravaController extends Controller {
    public function why_invest() {
        UserActivity::logActivity(56);

        return view('member/sirava/why_invest');
    }

    public function master_plan() {
        UserActivity::logActivity(57);

        return view('member/sirava/master_plan');
    }

    public function business_plan() {
        // Count .jpg files in the folder
        $filesCount = count( glob(public_path('images/member/business_plan_en/' . "*.jpg",GLOB_BRACE)) );

        UserActivity::logActivity(62);
        return view('member/sirava/business_plan', compact('filesCount'));
    }

    public function beach_club_mp() {
        UserActivity::logActivity(63);

        return view('member/sirava/beach_mp');
    }

    public function location() {
        UserActivity::logActivity(58);

        return view('member/sirava/location');
    }

    public function news() {
        UserActivity::logActivity(59);

        $arrArticles = Article::orderBy('id', 'DESC')->paginate(5);

        return view('member/sirava/news')->with(['arrArticles' => $arrArticles]);
    }

    public function how_to_invest() {
        UserActivity::logActivity(60);

        return view('member/sirava/how_to_invest');
    }
}
