<?php

namespace App\Http\Controllers;

use App\User;
use App\UserActivity;
use DB;
use Spatie\Permission\Models\Role;
use App\Charts\MostVisitedPagesChart;
use App\Charts\NewestUsersChart;
use App\Order;
use App\PRSerial;

class AdminController extends Controller {
    public function index() {

        // Total users
        $intTotalUsers = User::count();

        // Newest Users chart
        $arrSignUps = User::select(DB::raw('DATE(created_at) AS date, COUNT(id) AS count'))
            ->where('created_at', '>', date('Y-m-d 00:00:00', strtotime('-6 days', time())))
            ->groupBy('date')
            ->get();

        $arrChartData = $arrSignUps->mapWithKeys(function ($item) {
            return [date('l j.n.', strtotime($item['date'])) => $item['count']];
        });
        $objNewestUsersChart = new NewestUsersChart($arrChartData->toArray());

        // Newest users
        $arrNewest = User::where('status', '!=', 1)
            ->orderBy('id', 'DESC')
            ->limit(10)
            ->with(['referral', 'roles', 'note'])
            ->get();

        // Newest partners
        $arrPartners = User::where('status', '!=', 1)
            ->where('id', '!=', 2474) // without my ID
            ->role('partner')
            ->orderBy('id', 'DESC')
            ->limit(5)
            ->with(['referral', 'roles', 'note'])
            ->get();

        // Newest Orders
        $arrOrders = Order::orderBy('id', 'DESC')
            ->with(['user', 'company', 'joint', 'tdo.project', 'pr.serials'])
            ->limit(5)
            ->get();

        // Most visited pages chart and table
        $arrPages = UserActivity::select(DB::raw('activity_id, COUNT(activity_id) AS count'))
            ->whereNotIn('activity_id', config('cee.ignored_activities'))
            ->where('created_at', '>', '2018-12-13 00:00:00')
            ->groupBy('activity_id')
            ->orderBy('count', 'DESC')
            ->limit(15)
            ->with('activity')
            ->get();

        $arrChartData = $arrPages->mapWithKeys(function ($item) {
            return [$item['activity']['name'] => $item['count']];
        });
        $objChart = new MostVisitedPagesChart($arrChartData->toArray());

        // Online users
        $arrOnline = User::online(config('cee.ignored_users'))
            ->get();

        // Recent logins
        $arrRecentLogins = UserActivity::where('activity_id', 1)
            ->whereNotIn('user_id', config('cee.ignored_users'))
            ->orderBy('id', 'DESC')
            ->limit(40)
            ->with(['user.referral', 'user.roles', 'user.note'])
            ->get();

        // Roles
        $arrRoles = Role::whereNotIn('id', [1, 2, 4, 12, 41])
            ->orderBy('name')
            ->withCount('users')
            ->get();

        // PR Serials
        $arrPRSerials = PRSerial::all();

        return view('admin/index')->with([
            'intTotalUsers' => $intTotalUsers,
            'objNewestUsersChart' => $objNewestUsersChart,
            'arrOnline' => $arrOnline,
            'arrPartners' => $arrPartners,
            'objChart' => $objChart,
            'arrChartData' => $arrChartData,
            'arrNewest' => $arrNewest,
            'arrRecentLogins' => $arrRecentLogins,
            'arrRoles' => $arrRoles,
            'arrOrders' => $arrOrders,
            'arrPRSerials' => $arrPRSerials
        ]);
    }
}
