<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\User;
use App\UserActivity;
use DB;
use Spatie\Permission\Models\Role;
use Cookie;
use App\Charts\MostVisitedPagesChart;

class UserController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $arrUsers = User::orderBy('id', 'desc')
            ->with(['referral', 'roles', 'note']);
        if (!Cookie::has('cee_red')) $arrUsers->where('status', '!=', 1);
        if (isset($_GET['search'])) $arrUsers->search($_GET['search']);
        $arrUsers = $arrUsers->paginate(50);

        return view('marketing/users/index')->with([
            'arrUsers' => $arrUsers
        ]);
    }

    public function user($id) {
        $objUser = User::with(['referral', 'roles', 'comments.author', 'lastPages.activity'])->findOrFail($id);

        return view('marketing/users/user')->with([
            'objUser' => $objUser
        ]);
    }

    public function activity($id) {
        $objUser = User::findOrFail($id);

        $arrUserActivities = UserActivity::where('user_id', $objUser->id)
            ->orderBy('id', 'DESC')
            ->with('activity')
            ->paginate(20);

        // Most visited pages chart and table
        $arrPages = UserActivity::select(DB::raw('activity_id, COUNT(activity_id) as count'))
            ->where('user_id', $objUser->id)
            ->whereNotIn('activity_id', [1, 2])
            ->groupBy('activity_id')
            ->orderBy('count', 'desc')
            ->limit(10)
            ->with('activity')
            ->get();

        $arrChartData = $arrPages->mapWithKeys(function ($item) {
            return [$item['activity']['name'] => $item['count']];
        });
        $objChart = new MostVisitedPagesChart($arrChartData->toArray());

        return view('marketing/users/activity')->with([
            'objUser' => $objUser,
            'arrUserActivities' => $arrUserActivities,
            'arrChartData' => $arrChartData,
            'objChart' => $objChart
        ]);
    }

    public function by_role($name = null) {
        if ($name != null) {
            $arrUsers = User::role($name)->with(['referral', 'roles', 'note']);
            if (!Cookie::has('cee_red')) $arrUsers->where('status', '!=', 1);
            if (isset($_GET['search'])) $arrUsers = User::search($arrUsers, $_GET['search']);
            $arrUsers = $arrUsers->orderBy('id', 'desc')->paginate(50);

            return view('marketing/users/by_role')->with([
                'arrUsers' => $arrUsers,
                'name' => $name
            ]);
        }
        else {
            $arrRoles = Role::whereNotIn('id', [1, 2, 4, 12])->orderBy('name')->get();

            return view('marketing/users/by_role_select', [
                'arrRoles' => $arrRoles
            ]);
        }
    }

    public function by_status($id = null) {
        if ($id != null) {
            $arrUsers = User::where('status', $id)->with(['referral', 'roles', 'note']);
            if (isset($_GET['search'])) $arrUsers = User::search($arrUsers, $_GET['search']);
            $arrUsers = $arrUsers->orderBy('id', 'desc')->paginate(50);

            if ($id == 0) $name = 'Not reached yet';
            elseif ($id == 1) $name = 'Don\'t call';
            elseif ($id == 2) $name = 'Call back';
            elseif ($id == 3) $name = 'Hot client';
            else $name = 'Already client';

            return view('marketing/users/by_status')->with([
                'arrUsers' => $arrUsers,
                'name' => $name
            ]);
        }
        else {
            return view('marketing/users/by_status_select');
        }
    }
}
