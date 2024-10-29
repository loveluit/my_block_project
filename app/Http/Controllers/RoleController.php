<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    function Role_permission(){

        $permissions= Permission::all();
        $roles = Role::all();
        return view('Admin.Role.role_permission',[
            'permissions'=> $permissions,
            'roles'=> $roles,
        ]);

    } // Role permission _name Store

    function Role_permission_store(Request $request){

        $permission = Permission::create(['name' => $request->permission_name]);

        return back()->with('role', 'Role Permission Added Successfuly');
    }

    // Role Namme Store

    function Role_store(Request $request){

        $role = Role::create(['name' => $request->role_name]);
        $role->givePermissionTo($request->permission);


        return back()->with('role', 'Role Name Added Successfuly');
    }

}
