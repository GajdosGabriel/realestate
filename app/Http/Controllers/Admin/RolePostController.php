<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\User;
use App\AgentRole;
use App\Http\Requests\RoleRequest;

class RolePostController extends Controller {
    public function new(RoleRequest $objRequest) {
        Role::create([
            'name' => $objRequest->name,
            'bg_color' => $objRequest->bg_color,
            'color' => $objRequest->color,
            'description' => $objRequest->description,
            'guard_name' => 'web'
        ]);

        return redirect(route('admin.roles.home'));
    }

    public function edit(RoleRequest $objRequest) {
        Role::findOrFail($objRequest->id)->update($objRequest->all());

        return redirect(route('admin.roles.home'));
    }

    public function user_roles(Request $objRequest) {
        $objUser = User::findOrFail($objRequest->user_id);

        $objUser->syncRoles($objRequest->roles ?? []);

        flash('Roles have been saved.')->success();

        return back();
    }

    public function agent_roles(Request $objRequest) {

        // Remove existing
        $arrExisting = AgentRole::where('agent_id', $objRequest->agent_id)->get();
        foreach ($arrExisting as $objAgentRole) {
            $objAgentRole->delete();
        }

        // Add new
        if (isset($objRequest->roles) and count($objRequest->roles) > 0) {
            foreach ($objRequest->roles as $intRoleId) {
                AgentRole::create([
                    'agent_id' => $objRequest->agent_id,
                    'role_id' => $intRoleId
                ]);
            }
        }

        flash('Roles have been assigned.')->success();

        return back();
    }
}