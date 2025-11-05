<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function register_action(Request $request) 
    {
        $request->validate([
            'nama'=> 'required',
            'username'=> 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',

        ]);

        $admin = new Admin([
            'nama' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $admin->save();
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('admin/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])  )
        {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'password' => "Username / Password Salah !",
        ]);

    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);

        $admin = Admin::find(Auth::id());
        $admin->password = Hash::make($request->new_password);
        $admin->save();
        $request->session()->regenerate();
        return back()->with('sucess', 'Password Berhasil Diganti!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }



}
