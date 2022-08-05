<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medication;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function show() {   
        $user = Auth::user();
        $medications = Medication::all()->where('user_id', '==', $user->id) ;
        return view('account')->with('medications', $medications );
    }
}