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
        if(Auth::attempt($request->only('email','password'))){
            return redirect('otp');
        }
        return redirect('login');

    }
}
