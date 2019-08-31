<?php

namespace App\Http\Controllers;

use App\User;
use App\UserActivity;
use DB;
use App\Charts\MostVisitedPagesChart;
use App\Charts\NewestUsersChart;
use Spatie\Permission\Models\Role;

class MarketingController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        // Total users
        $intTotalUsers = User::count();

        // Newest Users chart
        $arrSignUps = User::select(DB::raw('DATE(created_at) AS date, count(id) AS count'))
            ->where('created_at', '>', date('Y-m-d 00:00:00', strtotime('-6 days', time())))
            ->groupBy('date')
            ->get();

        $arrChartData = $arrSignUps->mapWithKeys(function ($item) {
            return [date('l j.n.', strtotime($item['date'])) => $item['count']];
        });
        $objNewestUsersChart = new NewestUsersChart($arrChartData->toArray());

        // Newest Users
        $arrNewest = User::with(['roles', 'referral', 'note'])
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get();

        // Most visited pages chart and table
        $arrPages = UserActivity::select(DB::raw('activity_id, COUNT(activity_id) as count'))
            ->whereNotIn('activity_id', config('cee.ignored_activities'))
            ->where('created_at', '>', '2018-12-13 00:00:00')
            ->groupBy('activity_id')
            ->orderBy('count', 'desc')
            ->limit(15)
            ->with('activity')
            ->get();

        $arrChartData = $arrPages->mapWithKeys(function ($item) {
            return [$item['activity']['name'] => $item['count']];
        });
        $objChart = new MostVisitedPagesChart($arrChartData->toArray());

        // Online users
        $arrOnline = User::online(config('cee.ignored_users'))->get();

        // Recent logins
        $arrRecentLogins = UserActivity::where('activity_id', 1)
            ->whereNotIn('user_id', config('cee.ignored_users'))
            ->orderBy('id', 'desc')
            ->limit(30)
            ->with(['user.referral', 'user.roles', 'user.note'])
            ->get();

        // Roles
        $arrRoles = Role::whereNotIn('id', [1, 2, 4, 12])
            ->orderBy('name')
            ->withCount('users')
            ->get();

        return view('marketing/index')->with([
            'arrNewest' => $arrNewest,
            'objNewestUsersChart' => $objNewestUsersChart,
            'arrOnline' => $arrOnline,
            'arrChartData' => $arrChartData,
            'arrRecentLogins' => $arrRecentLogins,
            'objChart' => $objChart,
            'arrRoles' => $arrRoles,
            'intTotalUsers' => $intTotalUsers
        ]);
    }
}