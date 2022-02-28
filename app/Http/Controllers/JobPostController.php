<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Benefits;
use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    protected $jobPosts, $benefits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Only show job posts associated with specific user
        $jobPosts = auth()->user()->jobpost()->orderBy('created_at', 'desc')->paginate(3);
        
        return view ('/posts/index', [
            'posts' => $jobPosts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'salary' => 'required',
            'commute_type' => 'required',
            'contract_type' => 'required',
            'benefits' => 'required',
            'skills' => 'required',
            
        ]);
        
        $jobPost = new JobPost;
        $jobPost->user()->associate(Auth::user());
        $jobPost->job_title = $request->job_title;
        $jobPost->job_description = $request->job_description;
        $jobPost->salary = $request->salary;
        $jobPost->commute_type = $request->commute_type;
        $jobPost->contract_type = $request->contract_type;
        $jobPost->save();

        $benefits = new Benefits;
        $benefits->benefits = $request->benefits;
        $jobPost->benefits()->save($benefits);

        $skills = new Skills;
        $skills->skills = $request->skills;
        $skills->skills()->save($skills);

        return redirect()->route('posts.index')->with('success', 'Job Post added Successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobPost= JobPost::find($id);
        $benefits = Benefits::find($id);
        
        return view('posts.show')->with('jobPost', $jobPost)->with('benefits', $benefits);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $jobPost = JobPost::find($id);
        return view('posts.edit')->with('jobPost', $jobPost);       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        $jobPost = JobPost::find($id);
        $jobPost = JobPost::where('id',$id)->first();
        $jobPost->job_title = $request->input('job_title');
        $jobPost->job_description = $request->input('job_description');
        $jobPost->salary = $request->input('salary');
        $jobPost->commute_type = $request->input('commute_type');
        $jobPost->contract_type = $request->input('contract_type');
        $jobPost->save();

        


        return redirect()->route('posts.index')->with('success', 'Job Post updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPost $jobPost)
    {
        //
    }
}
