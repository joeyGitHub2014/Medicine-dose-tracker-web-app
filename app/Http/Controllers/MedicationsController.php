<?php

namespace App\Http\Controllers;
use App\Models\Medication;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MedicationsController extends Controller
{
    public function store(Request $request)
    {
        $validator=  Validator::make($request->all(), [
            'mname' => ['required'],
            'dosage' => ['required', 'numeric','min:2', 'max:30'],
            'freq' => ['required', 'numeric', 'min:1', 'max:3']
        ]);

        if ($validator->fails()) {
            return redirect('account')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user = Auth::user();
        $medication = new Medication;
        $medication->name   = $request->input('mname');
        $medication->dosage   = $request->input('dosage');
        $medication->frequency = $request->input('freq');
        $medication->user_id = $user->id;
        $medication->save();
        $medications           = Medication::all()->where('user_id', '==', $user->id) ;

        return back()->withInput()->with('status', 'Medication Created!')->with('medications', $medications);
    }
}
