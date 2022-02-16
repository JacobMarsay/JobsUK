<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyDashboardController extends Controller
{
    public function create(){
        return view ('dashboards/company-dashboard');
    }
}
