<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobPost;
use App\Models\User;


class CompanyDashboardController extends Controller
{
    public function create(){
        return view ('dashboards/company-dashboard');
    }

    public function index(){

        $jobPosts = auth()->user()->jobpost()->orderBy('created_at', 'desc')->paginate(3);
        
        return view ('dashboards/company-dashboard', [
            'job_posts' => $jobPosts
        ]);
    }
}
