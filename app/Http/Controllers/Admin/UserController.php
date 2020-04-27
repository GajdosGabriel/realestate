<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\UserActivity;
use Auth;
use DB;
use Spatie\Permission\Models\Role;
use App\Document;
use Cookie;
use App\Pep;
use App\Order;
use App\Charts\MostVisitedPagesChart;

class UserController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $arrUsers = User::orderBy('id', 'DESC')
            ->with(['referral', 'roles', 'note']);
        if (!Cookie::has('cee_red')) $arrUsers->where('status', '!=', 1);
        if (isset($_GET['search'])) $arrUsers->search($_GET['search']);
        $arrUsers = $arrUsers->paginate(50);

        return view('admin/users/index')->with([
            'arrUsers' => $arrUsers
        ]);
    }

    public function delete(User $user){

       UserActivity::whereUserId($user->id)->get()->each->delete();
        $user->delete();
        flash('User was successfully deleted.')->success();
        return redirect('admin/users');
    }

    public function new() {
        return view('admin/users/new');
    }

    public function user($id) {
        $objUser = User::with(['referral', 'roles', 'comments.author', 'lastPages.activity', 'reminders.agent'])->findOrFail($id);

        $arrAgents = User::role('agent')
            ->where('id', '!=', 1)
            ->get();

        return view('admin/users/user')->with([
            'objUser' => $objUser,
            'arrAgents' => $arrAgents
        ]);
    }

    public function edit($id) {
        $objUser = User::findOrFail($id);

        return view('admin/users/edit')->with([
            'objUser' => $objUser
        ]);
    }

    public function pep($id) {
        $objUser = User::findOrFail($id);

        $objPep = Pep::where('user_id', $id)->first();

        return view('admin/users/pep')->with([
            'objUser' => $objUser,
            'objPep' => $objPep
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
            ->orderBy('count', 'DESC')
            ->limit(10)
            ->with('activity')
            ->get();

        $arrChartData = $arrPages->mapWithKeys(function ($item) {
            return [$item['activity']['name'] => $item['count']];
        });
        $objChart = new MostVisitedPagesChart($arrChartData->toArray());

        return view('admin/users/activity')->with([
            'objUser' => $objUser,
            'arrUserActivities' => $arrUserActivities,
            'arrChartData' => $arrChartData,
            'objChart' => $objChart
        ]);
    }

    public function agent($id) {
        $objUser = User::with('agentRoles.role')->findOrFail($id);
        $arrAssignedRoles = collect();
        foreach ($objUser->agentRoles as $r) {
            $arrAssignedRoles[$r->role_id] = $r->role->name;
        }

        $arrRoles = Role::orderBy('name')->get();

        return view('admin/users/agent')->with([
            'objUser' => $objUser,
            'arrRoles' => $arrRoles,
            'arrAssignedRoles' => $arrAssignedRoles
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

        return view('admin/users/partner')->with([
            'objUser' => $objUser,
            'arrClients' => $arrClients,
            'arrInvestors' => $arrInvestors
        ]);
    }

    public function by_role($name = null) {
        if ($name != null) {
            $arrUsers = User::role($name)
                ->with(['referral', 'roles', 'note'])
                ->orderBy('id', 'DESC');

            // Staff are red client with don't showing
//            if (!Cookie::has('cee_red')) $arrUsers->where('status', '!=', 1);
            if (isset($_GET['search'])) $arrUsers->search($_GET['search']);
            $arrUsers = $arrUsers->paginate(50);

            return view('admin/users/by_role')->with([
                'arrUsers' => $arrUsers,
                'name' => $name
            ]);
        }
        else {
            $arrRoles = Role::orderBy('name')->get();

            return view('admin/users/by_role_select', [
                'arrRoles' => $arrRoles
            ]);
        }
    }

    public function by_status($id = null) {
        if ($id != null) {
            $arrUsers = User::where('status', $id)
                ->with(['referral', 'roles', 'note'])
                ->orderBy('id', 'DESC');
            if (isset($_GET['search'])) $arrUsers->search($_GET['search']);
            $arrUsers = $arrUsers->paginate(50);

            if ($id == 0) $name = 'Not reached yet';
            elseif ($id == 1) $name = 'Don\'t call';
            elseif ($id == 2) $name = 'Call back';
            elseif ($id == 3) $name = 'Hot client';
            elseif ($id == 5) $name = 'Phase 3 client';
            else $name = 'Already client';

            return view('admin/users/by_status')->with([
                'arrUsers' => $arrUsers,
                'name' => $name
            ]);
        }
        else {
            return view('admin/users/by_status_select');
        }
    }

    public function agents() {
//         Without me
        $arrUsers = User::role('agent')->with(['referral', 'roles', 'note'])->orderBy('id', 'DESC');
        if (isset($_GET['search'])) $arrUsers->search($_GET['search']);
        $arrUsers = $arrUsers->paginate(50);

        return view('admin/users/agents')->with([
            'arrUsers' => $arrUsers,
            'name' => 'agent'
        ]);
    }

    public function impersonate($id) {
        $objUser = User::findOrFail($id);
        Auth::user()->impersonate($objUser);

        return redirect(route('member.home'));
    }

    public function roles($id) {
        $objUser = User::findOrFail($id);
        $arrRoles = Role::orderBy('name')->get();

        return view('admin/users/roles')->with([
            'objUser' => $objUser,
            'arrRoles' => $arrRoles
        ]);
    }

    public function documents($id) {
        $objUser = User::with('user_documents')->findOrFail($id);
        $arrUserDocuments = $objUser->user_documents;
        $arrDocuments = Document::get();

        foreach ($arrDocuments as $objDocument) {
            $objDocument->user_documents = $arrUserDocuments->where('document_id', $objDocument->id);
        }

        return view('admin/users/documents')->with([
            'objUser' => $objUser,
            'arrDocuments' => $arrDocuments
        ]);
    }

    public function bank_details($id) {
        $objUser = User::with('bank_details')->findOrFail($id);

        return view('admin/users/bank_details')->with([
            'objUser' => $objUser
        ]);
    }

    public function orders($id) {
        $objUser = User::findOrFail($id);

        $arrOrders = Order::where('user_id', $objUser->id)
            ->with(['tdo.project', 'pr.serials'])
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('admin/users/orders')->with([
            'objUser' => $objUser,
            'arrOrders' => $arrOrders
        ]);
    }
}