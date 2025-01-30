<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class UsersManagement extends Controller
{
    public function users()
    {


        return view('admin.users_management.users.page');
    }



    public function permissions()
    {
        return view('admin.users_management.permissions.page');
    }
}
