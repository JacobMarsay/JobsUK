<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Address;
use App\Models\Account;
use App\Models\Application;
use App\Models\Skills;
use App\Models\References;
use App\Models\Application;
use App\Models\Education;
use App\Models\Grades;
use Hash;

class JobSeekerRegistrationController extends Controller
{ 

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');
    } 
}