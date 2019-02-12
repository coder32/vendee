<?php

namespace App\Http\Controllers;

use App\Permissions;
use App\RoleHasPermission;
use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RoleController extends Controller
{
    //

    public function index()
    {
        if (Utils::hasPermission("Roles")) {
            $roles = Roles::all();
            $permissions = Permissions::all();
            $roleHasPermission = RoleHasPermission::all();
            return view('admin.roles.index', ['roles' => $roles, 'permissions' => $permissions, 'roleHasPermissions' => $roleHasPermission]);
        }else{
            return back()->with("error", 'You have no permission to due this');
        }
    }


    public function update(){

        if (Utils::hasPermission("Roles")) {
            RoleHasPermission::truncate();

            ActivityLogsController::insertLog("UPDATE ALL ROLES", 0, "rolesUpdate");
            $rolePermissionData = [];
            $inputArray = Input::get('role_permission');
            foreach ($inputArray as $item) {
                $split = explode(".", $item);
                array_push($rolePermissionData, [
                    'permission_id' => (string)$split[1],
                    'role_id' => (string)$split[0],
                ]);
            }
            RoleHasPermission::insert($rolePermissionData);
            return $this->index()->with("success", "Data updated successfully!");

        }else{
            return back()->with("error", 'You have no permission to due this');
        }


    }
}
