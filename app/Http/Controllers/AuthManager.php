<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function loginPost(Request $req){   
        $req ->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $req->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return redirect()->route('login.view')
            ->with('error', 'Login failed');
    }

    function register(){
        return view('register');
    }

    function registerPost(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['password'] = $req->password;
        $user = User::create($data);
        if(!$user){
            return "<h3>Unsccessfull";
        }
        return "<h3>Successfull</h3>";

    }
}
