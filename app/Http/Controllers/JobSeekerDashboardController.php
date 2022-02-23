<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobSeekerDashboardController extends Controller
{
    public function create(){
        return view ('dashboards/jobseeker-dashboard');
    }
}
