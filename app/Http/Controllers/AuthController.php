<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function registration(Request $request){
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/login');

        // return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }
}
