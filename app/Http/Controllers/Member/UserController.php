<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\User;
use App\UserActivity;
use DB;
use Auth;

class UserController extends Controller {
    public function user($id) {
        $objUser = User::with(['comments', 'lastPages.activity'])->findOrFail($id);

        if ($objUser->referral_id != Auth::user()->id) return redirect(route('member.partner.your-signups'));

        return view('member/users/user')->with([
            'objUser' => $objUser
        ]);
    }

    public function activity($id) {
        $objUser = User::findOrFail($id);

        if ($objUser->referral_id != Auth::user()->id) return redirect(route('member.partner.your-signups'));

        $arrUserActivities = UserActivity::where('user_id', $objUser->id)
            ->orderBy('id', 'desc')
            ->with('activity')
            ->paginate(20);

        // Most visited pages chart and table
        $arrPages = UserActivity::select(DB::raw('activity_id, COUNT(activity_id) AS count'))
            ->where('user_id', $objUser->id)
            ->whereNotIn('activity_id', [1, 2])
            ->groupBy('activity_id')
            ->orderBy('count', 'DESC')
            ->limit(10)
            ->with('activity')
            ->get();

        $arrChartData = $arrPages->mapWithKeys(function ($item) {
            return [$item['activity']['name'] => $item['count']];
        });

        return view('member/users/activity')->with([
            'objUser' => $objUser,
            'arrUserActivities' => $arrUserActivities,
            'arrChartData' => $arrChartData
        ]);
    }
}