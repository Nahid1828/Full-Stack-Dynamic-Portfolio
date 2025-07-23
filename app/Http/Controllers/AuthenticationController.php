<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => "required" ,
            'password' => "required" , 
        ]);

        if(Auth::attempt($credentials)){
            echo "Login Successful";
        }else{
            echo "Login Failed";
        }

    }

    public function register(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'email' => "required" ,
            'password' => "required" , 
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        echo "Registration Success";

    }
}