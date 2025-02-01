<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index (){
        $teams = Team::with('mentor')->get();
        // dd($teams);
        return view('admin.team.team-view', compact('teams'));
    }
}
