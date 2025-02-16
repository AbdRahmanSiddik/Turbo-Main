<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $datas = [
            'permissions' => Permission::all(),
            'title' => 'Permissions',
        ];



        return view('admin.users_management.permissions.page', $datas);
    }

    public function storePermission(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions',
            'guard_name' => 'required'
        ]);
        $permission = Permission::create([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);
        return redirect()->route('permissions.index')->with('success', 'Permission created successfully.');
    }

    public function updatePermission(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'guard_name' => 'required'
        ]);
        $permission = Permission::findOrFail($id);
        $permission->update([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);
        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully.');
    }

    public function destroyPermission($id)
    {
        $permission = Permission::findOrFail($id);
        if ($permission == null) {
            session()->flash('error', 'permission not found.');

            return response()->json(['error' => 'permission not found.']);
        }

        $permission->delete();

        session()->flash('success', 'permission deleted successfully.');
        return redirect()->route('permissions.index');
    }
}
