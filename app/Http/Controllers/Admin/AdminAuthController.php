<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin()
    {
        $data = [
            'email' => request('email'),
            'password' => request('password'),
        ];

        if (auth()->attempt($data)) {
            return redirect('admin');
        }else{
            return redirect('admin/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
