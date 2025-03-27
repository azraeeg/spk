<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login_proses(Request $request)
    {
        $request->validate([
            'Nopeg'     => 'required',
            'password'  => 'required',
        ]);

        $user = DB::table('choper')
            ->where('Nopeg', $request->Nopeg)
            ->first(); // Ambil pengguna berdasarkan Nopeg

        if ($user) {
            if ($user->password === $request->password) {
                Auth::guard('web')->loginUsingId($user->id); // Login tanpa hashing password
                return redirect()->route('admin.profil.view');
            }
        }

        return redirect()->route('login')->with('failed', 'Nopeg atau password salah');
    }

    // public function login_proses(Request $request){
    //     $request->validate([
    //         'Nopeg'     => 'required',
    //         'password'  => 'required',
    //     ]);

    //     $credentials = [
    //         'Nopeg'     => $request->Nopeg,
    //         'password'  => $request->password,
    //     ];

    //     $user = User::where('Nopeg', $request->Nopeg)->first(); // Ambil pengguna berdasarkan Nopeg

    //     if ($user) {
    //         if ($user->password === $request->password) {
    //             Auth::guard('web')->login($user); // Login tanpa hashing password
    //             return redirect()->route('admin.dashboard');
    //         }
    //     }

    //     return redirect()->route('login')->with('failed', 'Nopeg atau password salah');
    // }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('succes', 'kamu berhasil logout');
    }
}
