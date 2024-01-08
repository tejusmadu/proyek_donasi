<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Jika autentikasi berhasil, redirect ke halaman admin
            return redirect()->intended('/admin/dashboard');
        } else {
            // Jika autentikasi gagal, redirect kembali ke halaman login
            return redirect()->back()->withInput($request->only('email'));
        }
    }
}
