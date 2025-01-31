<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDO;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersManagement extends Controller
{

    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users_management.users.page', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:roles']);
        $role = Role::create(['name' => $request->name]);
        return response()->json(['success' => 'Role created successfully.']);
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required']);
        $role = Role::findOrFail($id);
        $role->update(['name' => $request->name]);
        return response()->json(['success' => 'Role updated successfully.']);
    }

    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return response()->json(['success' => 'Role deleted successfully.']);
    }
}
