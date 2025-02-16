<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;


class RoleController extends Controller
{
    public function index()
    {
        $datas = [
            'roles' => Role::with('permissions')->get(),
            'permissions' => Permission::all(), // Ambil semua permissions
            'title' => 'Roles', // Judul halaman roles
        ];

        return view('admin.users_management.roles.page', $datas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'array', // Pastikan permissions dikirim sebagai array
        ]);

        $role = Role::create(['name' => $request->name]);

        if (!empty($request->permissions)) {
            foreach ($request->permissions as $permissionName) {
                Permission::firstOrCreate(['name' => $permissionName]);
                $role->givePermissionTo($permissionName);
            }
        }

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    public function update(Request $request, $roleId)
    {
        // Mencari role berdasarkan ID
        $role = Role::findOrFail($roleId);

        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles,name,' . $roleId, // Memperbaiki validasi unik
            'permissions' => 'array',  // Memastikan permissions berupa array
        ]);

        if ($validator->passes()) {
            // Update nama role
            $role->update(['name' => $request->name]);

            // Hapus permissions lama dan sync permissions baru
            $role->syncPermissions($request->permissions);

            // Mengarahkan ke halaman roles dengan pesan sukses
            return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
        } else {
            // Kembali ke halaman roles dengan error dan input sebelumnya
            return redirect()->route('roles.index')->withInput()->withErrors($validator);
        }
    }



    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        if ($role == null) {
            session()->flash('error', 'role not found.');

            return response()->json(['error' => 'Role not found.']);
        }

        $role->delete();

        session()->flash('success', 'Role deleted successfully.');
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
