<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('roles.index', compact('roles', 'permissions'));
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
