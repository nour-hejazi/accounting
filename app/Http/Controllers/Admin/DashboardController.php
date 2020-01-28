<?php

namespace App\Http\Controllers\Admin;

use App\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title = trans('main.dashboard');
        return view('admin.home', compact('title'));
    }
}
