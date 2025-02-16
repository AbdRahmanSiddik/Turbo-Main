<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if(!$user->profile)
        {
            Profile::create([
                'user_id' => $user->id,
                'token_user' => Str::random(16)
            ]);
        }

        return view('admin.profile.profile-view');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Profile $profile)
    {
        //
    }

    public function edit(Profile $profile)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|numeric',
            'alamat' => 'required|string|max:255',
        ], [
            'name.required' => 'Nama Lengkap wajib diisi.',
            'name.string' => 'Nama Lengkap harus berupa teks.',
            'name.max' => 'Nama Lengkap maksimal 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email tidak valid.',
            'email.max' => 'Email maksimal 255 karakter.',
            'telepon.required' => 'Nomor Telepon wajib diisi.',
            'telepon.numeric' => 'Nomor Telepon harus berupa angka.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'alamat.max' => 'Alamat maksimal 255 karakter.',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        Profile::where('user_id', $user->id)->update([
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        return redirect()->back()->with('success', 'Profile berhasil diupdate');
    }

    public function foto(Request $request, User $user)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'foto.required' => 'Foto wajib diisi.',
            'foto.image' => 'File harus berupa gambar.',
            'foto.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif.',
            'foto.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        // Delete the old profile picture if it exists
        $oldImage = $user->profile->foto;
        if ($oldImage && file_exists(public_path('img/profile/' . $oldImage))) {
            File::delete(public_path('img/profile/' . $oldImage));
        }
        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('img/profile'), $imageName);

        Profile::where('user_id', $user->id)->update([
            'foto' => $imageName,
        ]);

        return redirect()->back()->with('success', 'Foto profile berhasil diupdate');
    }

    public function changePassword(Request $request, User $user)
    {
        $request->validate([
            'current' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'current.required' => 'Password saat ini wajib diisi.',
            'password.required' => 'Password baru wajib diisi.',
            'password.string' => 'Password baru harus berupa teks.',
            'password.min' => 'Password baru minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        if (!Hash::check($request->current, $user->password)) {
            return redirect()->back()->withErrors(['current' => 'Password saat ini tidak sesuai.']);
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Password berhasil diubah');
    }

    public function destroy(Profile $profile)
    {
        //
    }
}
