<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    //buat  menampilkan data pada riwayatl
    public function riwayat()
    {
        $users = User::all();
        return view('riwayat', compact('users'));
    }
    //
    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'role' => 'required|in:user,admin',
        ]);

        $credentials = $request->only('name', 'password');
        $role = $request->input('role');

        if ($role === 'admin') {
            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect('/dashboardadmin');
            } else {
                return redirect()
                    ->back()
                    ->withInput($request->only('name', 'role'))
                    ->with('error', 'Username,dan email,passwrod anda benar. silahkan cek role jika terjadi eror');
            }
        } elseif ($role === 'user') {
            if (Auth::guard('web')->attempt($credentials)) {
                return redirect('/home');
            } else {
                return redirect()
                    ->back()
                    ->withInput($request->only('name', 'role'))
                    ->with('error', 'Username,dan email,passwrod anda benar. silahkan cek role jika terjadi eror');
            }
        } else {
            // Pilihan peran tidak valid
            return redirect()
                ->back()
                ->withInput($request->only('name', 'role'))
                ->with('error', 'Pilihan peran tidak valid.');
        }
    }
    public function showRegistrationForm()
    {
        return view('registrasi');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Logika tambahan jika diperlukan

        return redirect('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //buat crudd data 


    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    public function edit_login($id)
    {
        $user = User::find($id);
        return view('edit_login', compact('user'));
    }

    public function update_(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        return redirect()->route('riwayat')->with('success', 'Data User Berhasil di updated ');
    }

    public function destroyn(User $id)
    {
        $id->delete();
        return redirect()->route('riwayat')->with('success', 'User berhasil dihapus.');
    }
    //
}
