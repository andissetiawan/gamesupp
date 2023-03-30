<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function simpanregistrasi(Request $request){
    //    dd($request->all());
    $user=User::create([
        'name'=>$request->username,
        'email'=>$request->email,
        'password'=>Hash::make($request->pass)
    ]);
    }
    public function proseslogin(Request $request){
        // dd($request->all());
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return redirect('masuk');

    }
    public function proseslogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('masuk');
        }
}
