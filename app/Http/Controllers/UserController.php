<?php

namespace App\Http\Controllers;

use App\Mail\SendPasswordMail;
use App\Models\Pendaftaran;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(Role $role)
    {
        // dd($role);
        $data = [
            'title' => ucfirst($role->name),
            'users' => User::role($role->name)->get(),
            'role' => $role
        ];
        return view('admin.user.view-user', $data);
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,name',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alamat' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'roles.required' => 'Role wajib dipilih.',
            'roles.*.exists' => 'Role yang dipilih tidak valid.',
            'profile_picture.image' => 'File harus berupa gambar.',
            'profile_picture.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif.',
            'profile_picture.max' => 'Ukuran gambar maksimal 2MB.',
            'alamat.required' => 'Alamat wajib diisi.',
            'telepon.required' => 'Nomor telepon wajib diisi.',
        ]);

        $password = Str::random(4) . $request->roles[0];

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($password),
        ]);

        $user->assignRole($request->roles);

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->alamat = $request->alamat;
        $profile->telepon = $request->telepon;
        $profile->token_user = Str::random(16);

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/profile'), $filename);
            $profile->foto = $filename;
        }

        $profile->save();

        // Send email with the password
        Mail::to($user->email)->send(new SendPasswordMail($user, $password));


        return redirect()->back()->with('success', 'User berhasil dibuat.');
    }

    public function show(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,name',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alamat' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'roles.required' => 'Role wajib dipilih.',
            'roles.*.exists' => 'Role yang dipilih tidak valid.',
            'profile_picture.image' => 'File harus berupa gambar.',
            'profile_picture.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif.',
            'profile_picture.max' => 'Ukuran gambar maksimal 2MB.',
            'alamat.required' => 'Alamat wajib diisi.',
            'telepon.required' => 'Nomor telepon wajib diisi.',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $user->syncRoles($request->roles);

        $profile = $user->profile;
        // dd($profile);
        $profile->alamat = $request->alamat;
        $profile->telepon = $request->telepon;

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/profile'), $filename);
            $profile->foto = $filename;
        }

        $profile->save();

        return redirect()->back()->with('success', 'User berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        if($user->pendaftaran){
            Pendaftaran::where('peserta_id', $user->id)->delete();
        }
        if ($user->profile) {
            Profile::where('user_id', $user->id)->delete();
        }
        $user->delete();

        return redirect()->back()->with('success', 'Data user berhasil dihapus');
    }
}
