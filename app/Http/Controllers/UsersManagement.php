<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDO;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersManagement extends Controller
{
    public function users()
    {
        $data = Role::all();
        return view('admin.users_management.users.page', compact('data'));
    }

    public function permissions()
    {

        $permissions = Permission::all();

        return view('admin.users_management.permissions.page', compact('permissions'));
    }

    public function roles()
    {
        $data = Role::all();

        return response()->json([
            'data' => $data
        ]);
    }

    public function storeRole(Request $request)
    {
        $role = Role::create(['name' => $request->name]);

        return response()->json([
            'data' => $role
        ]);
    }

    public function updateRole(Request $request, Role $role)
    {
        $role->update(['name' => $request->name]);

        return response()->json([
            'data' => $role
        ]);
    }

    public function deleteRole(Role $role)
    {
        $role->delete();

        return response()->json([
            'message' => 'Role deleted successfully'
        ]);
    }

    public function storePermission(Request $request)
    {
        $permission = Permission::create(['name' => $request->name]);

        return response()->json([
            'data' => $permission
        ]);
    }

    public function updatePermission(Request $request, Permission $permission)
    {
        $permission->update(['name' => $request->name]);

        return response()->json([
            'data' => $permission
        ]);
    }

    public function deletePermission(Permission $permission)
    {
        $permission->delete();

        return response()->json([
            'message' => 'Permission deleted successfully'
        ]);
    }
}
