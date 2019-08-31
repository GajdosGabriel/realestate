<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\User;
use App\UserActivity;
use Auth;
use DB;
use Spatie\Permission\Models\Role;
use App\AgentRole;
use Cookie;
use App\Charts\MostVisitedPagesChart;

class UserController extends Controller {
    private $arrRoles = [];

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->init();

        $arrUsers = User::role($this->arrRoles)
            ->orderBy('priority', 'ASC')
            ->orderBy('id', 'DESC')
            ->with(['referral', 'roles', 'note']);
        if (!Cookie::has('cee_red')) $arrUsers->where('status', '!=', 1);
        if (isset($_GET['search'])) $arrUsers->search($_GET['search']);
        $arrUsers = $arrUsers->paginate(50);

        return view('agent/users/index')->with([
            'arrUsers' => $arrUsers
        ]);
    }

    public function new() {
        return view('agent/users/new');
    }

    public function user($id) {
        $objUser = User::with(['referral', 'roles', 'comments.author', 'lastPages.activity', 'reminders.agent'])->findOrFail($id);

        $arrAgents = User::role('agent')
            ->where('id', '!=', 1)
            ->get();

        return view('agent/users/user')->with([
            'objUser' => $objUser,
            'arrAgents' => $arrAgents
        ]);
    }

    public function edit($id) {
        $objUser = User::findOrFail($id);

        return view('agent/users/edit')->with([
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
        $objChart = new MostVisitedPagesChart($arrChartData->toArray());

        return view('agent/users/activity')->with([
            'objUser' => $objUser,
            'arrUserActivities' => $arrUserActivities,
            'arrChartData' => $arrChartData,
            'objChart' => $objChart
        ]);
    }

    public function impersonate($id) {
        $objUser = User::findOrFail($id);
        Auth::user()->impersonate($objUser);

        return redirect(route('member.home'));
    }

    public function by_role($name = null) {
        $this->init();

        if ($name != null) {
            $arrUsers = User::role($name)
                ->with(['referral', 'roles', 'note'])
                ->orderBy('priority', 'ASC')
                ->orderBy('id', 'DESC');
            if (!Cookie::has('cee_red')) $arrUsers->where('status', '!=', 1);
            if (isset($_GET['search'])) $arrUsers->search($_GET['search']);
            $arrUsers = $arrUsers->paginate(50);

            return view('agent/users/by_role')->with([
                'arrUsers' => $arrUsers,
                'name' => $name
            ]);
        }
        else {
            $arrRoles = AgentRole::where('agent_id', Auth::user()->id)
                ->with(['role' => function($role) {
                    $role->orderBy('name');
                }])
                ->get();

            return view('agent/users/by_role_select', [
                'arrRoles' => $arrRoles
            ]);
        }
    }

    public function by_status($id = null) {
        $this->init();

        if ($id != null) {
            $arrUsers = User::role($this->arrRoles)
                ->where('status', $id)
                ->with(['referral', 'roles', 'note'])
                ->orderBy('priority', 'ASC')
                ->orderBy('id', 'DESC');
            if (isset($_GET['search'])) $arrUsers->search($_GET['search']);
            $arrUsers = $arrUsers->paginate(50);

            if ($id == 0) $name = 'Not reached yet';
            elseif ($id == 1) $name = 'Don\'t call';
            elseif ($id == 2) $name = 'Call back';
            elseif ($id == 3) $name = 'Hot client';
            elseif ($id == 5) $name = 'Phase 3 client';
            else $name = 'Already client';

            return view('agent/users/by_status')->with([
                'arrUsers' => $arrUsers,
                'name' => $name
            ]);
        }
        else {
            return view('agent/users/by_status_select');
        }
    }

    public function skczhu() {
        $arrUsers = User::whereIn('country', ['SVK', 'CZE', 'HUN'])
            ->with(['referral', 'roles', 'note'])
            ->orderBy('priority', 'ASC')
            ->orderBy('id', 'DESC');
        if (!Cookie::has('cee_red')) $arrUsers->where('status', '!=', 1);
        if (isset($_GET['search'])) $arrUsers->search($_GET['search']);
        $arrUsers = $arrUsers->paginate(50);

        return view('agent/users/skczhu')->with([
            'arrUsers' => $arrUsers
        ]);
    }

    public function roles($id) {
        $objUser = User::findOrFail($id);
        $arrRoles = Role::whereNotIn('name', ['admin', 'agent'])
            ->orderBy('name')
            ->get();

        return view('agent/users/roles')->with([
            'objUser' => $objUser,
            'arrRoles' => $arrRoles
        ]);
    }

    public function partner($id) {
        $objUser = User::findOrFail($id);

        $arrClients = User::where('referral_id', $objUser->id)
            ->doesntHave('orders')
            ->orderBy('id', 'DESC')
            ->with(['note', 'roles'])
            ->get();

        $arrInvestors = User::where('referral_id', $objUser->id)
            ->has('orders')
            ->orderBy('id', 'DESC')
            ->with(['note', 'roles'])
            ->get();

        return view('agent/users/partner')->with([
            'objUser' => $objUser,
            'arrClients' => $arrClients,
            'arrInvestors' => $arrInvestors
        ]);
    }

    public function move_down($id) {
        User::findOrFail($id)->update(['priority' => User::max('priority') + 1]);

        return back();
    }

    public function red_display($bool) {
        if ($bool == 1) {
            Cookie::queue('cee_red', '1', 60*24*30);

            return back();
        }
        else return back()->withCookie(Cookie::forget('cee_red'));
    }

    private function init() {
        $arrAgentRoles = AgentRole::where('agent_id', Auth::user()->id)
            ->with('role')
            ->get();

        foreach ($arrAgentRoles as $objAgentRole) {
            $this->arrRoles[] = $objAgentRole->role->name;
        }

        if (count($this->arrRoles) == 0) $this->arrRoles[] = 'nobody';
    }
}