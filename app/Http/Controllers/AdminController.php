<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Berita;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Testimoni;
use App\Models\Agenda;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $testimoni = Testimoni::count();
        $matkul = Matkul::count();
        $berita = Berita::count();
        $dosen = Dosen::count();
        $agenda = Agenda::count();
        return view('admin.dashboard', compact('testimoni', 'matkul', 'berita', 'dosen', 'agenda'));
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

        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            // $user = Auth::user();

            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'password' => 'Wrong Username or Password !'
        ]);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);

        $user = Admin::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password Changed !');
    }

    public function admin_dashboard()
    {
        return view('admin/dashboard');
    }


    public function logout(Request $request)
    {
        // Auth::logout();
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin');
    }
}