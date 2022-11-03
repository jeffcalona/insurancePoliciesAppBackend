<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        $users=User::all();
       
        return view("users/index", compact("users"));
    }

    
    public function edit (User $user)
    {
        
       
        return view("users/edit", compact("user"));
    }

    public function update(Request $request, User $user)
    {
       
        $user->name = $request->name;
        $user->email = $request->email;
        $user->identification = $request->identification;
        $user->save();
        return to_route('users.show', $user);  
    }

    
    public function show( User $user)
    {
       
        
        return view('users.show', compact("user"));  
    }
}
