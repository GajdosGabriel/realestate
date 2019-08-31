<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Charts\RolesChart;

class RoleController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $arrRoles = Role::whereNotIn('id', [41])->orderBy('name')->withCount('users')->get();

        $objChart = new RolesChart($arrRoles->sortBy('users_count')->reverse());

        return view('admin/roles/index')->with([
            'arrRoles' => $arrRoles,
            'objChart' => $objChart
        ]);
    }

    public function new() {
        return view('admin/roles/new');
    }

    public function edit($id) {
        $objRole = Role::findOrFail($id);

        return view('admin/roles/edit')->with([
            'objRole' => $objRole
        ]);
    }
}