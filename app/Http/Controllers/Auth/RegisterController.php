<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }
    
    public function  store(Request $request) { 

        $request->validate(['name' =>'required',
                            'email' =>'required|email|unique:users',
                            'password' => 'required|confirmed|min:8'
        ]);

        $user = User::create([
                  'name'  => $request->name,
                  'email' => $request->email,
                  'password' => Hash::make($request->password) 
        ]);
        

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }
}
