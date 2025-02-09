<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $datas = [
            'title' => 'Dashboard'

        ];

        return view('admin.dashboard.dashboard-view', $datas);
    }
}
