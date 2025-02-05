<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('mentor')->get();
        $mentors = User::with('roles')->whereHas('roles', function ($query) {
            $query->where('name', 'mentor');
        })->get();
        return view('admin.team.page', compact('teams', 'mentors'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama_team' => 'required|string|max:255',
            'mentor_id' => 'required|exists:users,id',
            'deskripsi' => 'required|string|max:1000',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        do {
            $token = Str::random(16);
        } while (Team::where('token_team', $token)->exists());
        $validated['token_team'] = $token;

        $file = $request->file('avatar');
        $filename = time() . '_' . Str::uuid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('img/team'), $filename);
        $validated['avatar'] = $filename;

        Team::create($validated);

        return redirect()->route('team.index')->with('success', 'Team berhasil ditambahkan!');
    }

    public function destroy($token){
        $team = Team::where('token_team', $token)->first();
        if ($team) {
            $avatarPath = public_path('img/team/' . $team->avatar);
            if (file_exists($avatarPath)) {
                unlink($avatarPath);
            }
        }
        Team::where('token_team', $token)->delete();
        return redirect()->route('team.index')->with('success', 'Team berhasil dihapus!');
    }

    public function update(Request $request, $token){
        $team = Team::where('token_team', $token)->first();

        $validated = $request->validate([
            'nama_team' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mentor_id' => 'required|exists:users,id',
            'deskripsi' => 'required|string|max:1000',
        ]);

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = time() . '_' . Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/team'), $filename);
            $validated['avatar'] = $filename;

            $avatarPath = public_path('img/team/' . $team->avatar);
            if (file_exists($avatarPath)) {
                unlink($avatarPath);
            }
        }else{
            $validated['avatar'] = $team->avatar;
        }

        do {
            $newToken = Str::random(16);
        } while (Team::where('token_team', $newToken)->exists());
        $validated['token_team'] = $newToken;

        Team::where('token_team', $token)->update($validated);

        return redirect()->route('team.index');
    }
}
