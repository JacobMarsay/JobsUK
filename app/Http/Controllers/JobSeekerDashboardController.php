<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSeekerDashboardController extends Controller
{
    public function create(){
        return view ('dashboards/jobseeker-dashboard');
    }
}
