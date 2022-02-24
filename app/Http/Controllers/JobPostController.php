<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\JobPost;
use App\Models\Benefits;

class JobPostController extends Controller
{
    protected $jobPost, $benefits;

    public function create(){
        return view ('job-post/create-job-post');
    }

    public function store(Request $request){
        $request->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'salary' => 'required',
            'commute_type' => 'required',
            'contract_type' => 'required',
            'benefits' => 'required',
            
        ]);
       
        $jobPost = new JobPost;
        $jobPost->job_title = $request->job_title;
        $jobPost->job_description = $request->job_description;
        $jobPost->salary = $request->salary;
        $jobPost->commute_type = $request->commute_type;
        $jobPost->contract_type = $request->contract_type;
        $jobPost->user()->associate(Auth::user());
        $jobPost->save();

        $benefits = new Benefits;
        $benefits->benefits = $request->benefits;
        $jobPost->benefits()->save($benefits);

        return redirect('dashboards/company-dashboard')->with('success', 'Job Post added Successfully.');
    }

    public function edit(JobPost $jobPost, Benefits $benefits)
    {
        return view('job-post/edit-job-post', [
            'jobPost' => $jobPost,
            'benefits' => $benefits
        ]);
    }


    public function update(Request $request, JobPost $jobPost, Benefits $benefits)
    {
        $request->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'salary' => 'required',
            'commute_type' => 'required',
            'contract_type' => 'required',
            'benefits' => 'required',
            ]);
   
            $jobPost->job_title = $request->job_title;
            $jobPost->job_description = $request->job_description;
            $jobPost->salary = $request->salary;
            $jobPost->commute_type = $request->commute_type;
            $jobPost->contract_type = $request->contract_type;
            $jobPost->user()->associate(Auth::user());
            $jobPost->save();

            $benefits->benefits = $request->benefits;
            $jobPost->benefits()->save($benefits);
            
            return redirect('dashboards/company-dashboard')->with('success', 'Job Post Updated Successfully.');
    }      
}
