<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Benefits;
use App\Models\JobPost;
use App\Models\Skills;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    protected $jobPosts, $benefits, $skills;
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

     //Adds a New Job Post from the required field
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'salary' => 'required',
            'commute_type' => 'required',
            'contract_type' => 'required',
            'benefits' => 'required',
            'skill_name' => 'required',
            'skill_type' => 'required',
            
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
        $skills->skill_name = $request->skill_name;
        $skills->skill_type = $request->skill_type;
        $jobPost->skills()->save($skills);
        

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
        //Gets Job Post information
        $jobPost= JobPost::find($id);
        $benefits = Benefits::find($id);
        $skills = Skills::find($id);
        
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
        
        //Gets selected Job Post
        $jobPost = JobPost::find($id);
        $jobPost = JobPost::where('id',$id)->first();

        //Saves Job post changes
        $jobPost->job_title = $request->input('job_title');
        $jobPost->job_description = $request->input('job_description');
        $jobPost->salary = $request->input('salary');
        $jobPost->commute_type = $request->input('commute_type');
        $jobPost->contract_type = $request->input('contract_type');
        $jobPost->save();

        //Gets benefits associated with job post
        $benefit = Benefits::find($id);
        $benefit = Benefits::where('id',$id)->first();

        //Saves benefit changes
        $benefit->benefits = $request->input('benefits');
        $benefit->save();
         
        //Gets skills associated with job post
        $skill = Skills::find($id);
        $skill = Skills::where('id',$id)->first();
        
        //Saves skills changes
        $skill->skill_name = $request->input('skill_name');
        $skill->skill_type = $request->input('skill_type');
        $skill->save();

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
