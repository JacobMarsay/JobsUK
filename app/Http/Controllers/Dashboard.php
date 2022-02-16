<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    switch (Auth::uesr()->role) {
        case 1:
            return View('/jobseeker-dashboard');
            break;

        case 2:
            return View('/company-dashboard');
            break;

    }
}
