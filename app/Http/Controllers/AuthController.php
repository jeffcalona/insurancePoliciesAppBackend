<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email|string",
            'password'=> "required|string"]);
        $remember = $request->filled("remember");
        if (Auth::attempt($request->only("email", "password"), $remember)) {

            $request->session()->regenerate();
           return redirect("admin")->with("status", "you are logged in");
        }
        throw ValidationException::withMessages(["email"=> __("auth.failed")]);        
        
    }

    public function index()
    {
       
      
        
        return view("auth/login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("login");
    }

   
}
