<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('user.login');
    }

    public function postlogin(Request $request){
        $user = $request->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);

        // cek apakah user berhasil login
        if (Auth::attempt($user)) {
            // jika berhasil arahkan ke dashboard
            return redirect('/dashboard');
        }else{
            // jika gagal kembalikan ke halaman login
            return back();
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
