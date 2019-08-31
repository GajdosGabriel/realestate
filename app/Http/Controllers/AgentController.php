<?php

namespace App\Http\Controllers;

use App\AgentRole;
use Auth;
use App\User;
use App\UserActivity;
use DB;
use Spatie\Permission\Models\Role;
use App\Charts\MostVisitedPagesChart;
use App\Charts\NewestUsersChart;

class AgentController extends Controller {
    private $arrRoles;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->init();

        // Total users
        $intTotalUsers = User::role($this->arrRoles)->count();

        // Newest Users chart
        $arrSignUps = User::select(DB::raw('DATE(created_at) AS date, count(id) AS count'))
            ->role($this->arrRoles)
            ->where('created_at', '>', date('Y-m-d 00:00:00', strtotime('-6 days', time())))
            ->groupBy('date')
            ->get();

        $arrChartData = $arrSignUps->mapWithKeys(function ($item) {
            return [date('l j.n.', strtotime($item['date'])) => $item['count']];
        });
        $objNewestUsersChart = new NewestUsersChart($arrChartData->toArray());

        // Newest users
        $arrNewest = User::role($this->arrRoles)
            ->where('status', '!=', 1)
            ->with(['roles', 'referral', 'note'])
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get();

        // Most visited pages chart and table
        $arrPages = UserActivity::select(DB::raw('activity_id, COUNT(activity_id) AS count'))
            ->whereHas('user', function ($query) {
                $query->role($this->arrRoles);
            })->whereNotIn('activity_id', config('cee.ignored_activities'))
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
        $arrOnline = User::online(config('cee.ignored_users'))
            ->role($this->arrRoles)
            ->get();

        // Recent logins
        $arrRecentLogins = UserActivity::whereHas('user', function ($query) {
            $query->role($this->arrRoles);
        })->where('activity_id', 1)
            ->whereNotIn('user_id', config('cee.ignored_users'))
            ->orderBy('id', 'desc')
            ->limit(20)
            ->with(['user.referral', 'user.roles', 'user.note'])
            ->get();

        // List of assigned roles
        $arrRoles = Role::whereIn('name', $this->arrRoles)
            ->whereNotIn('id', [1, 2, 4, 12])
            ->orderBy('name')
            ->withCount('users')
            ->get();

        return view('agent/index')->with([
            'objNewestUsersChart' => $objNewestUsersChart,
            'arrNewest' => $arrNewest,
            'arrOnline' => $arrOnline,
            'arrChartData' => $arrChartData,
            'objChart' => $objChart,
            'arrRecentLogins' => $arrRecentLogins,
            'arrRoles' => $arrRoles,
            'intTotalUsers' => $intTotalUsers
        ]);
    }

    private function init() {
        $arrAgentRoles = AgentRole::where('agent_id', Auth::user()->id)->with('role')->get();
        foreach ($arrAgentRoles as $objAgentRole) {
            $this->arrRoles[] = $objAgentRole->role->name;
        }

        if ($this->arrRoles == 0) $this->arrRoles[] = 'nobody';
//        if (count($this->arrRoles) == 0) $this->arrRoles[] = 'nobody';
    }
}
