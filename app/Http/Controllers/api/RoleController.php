<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function roles()
    {
        $data = Role::all();

        return response()->json([
            'data' => $data
        ]);
    }
}
