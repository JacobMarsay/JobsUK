@extends('layouts.app')
@section('content')
<div class="">
    <h1>Edit Job Post</h1>
    <form action="{{route('posts.update', $jobPost->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="">
            <h1>Job Information</h1>
            <label for="job_title">Job Title</label>
            <input type="text" name="job_title" id="job_title" value="{{ $jobPost->job_title }}" class=" p-2 bg-gray-200 @error('job_title') is-invalid @enderror" />
                @error('job_title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="">
            <label for="job_description">Job Description:</label>
            <textarea name="job_description" id="job_description" row="5" class=" p-2 bg-gray-200 @error('job_description') is-invalid @enderror"> {{ $jobPost->job_description }}</textarea>
                @error('job_description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="">
            <h1>Salary</h1>
            <label for="salary">Salary</label>
            <input type="text" name="salary" value="{{ $jobPost->salary }}" id="salary" row="5" class=" p-2 bg-gray-200 @error('salary') is-invalid @enderror">
                @error('salary')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="">
            <h1>Contract And Commute Details</h1>
            <label for="commute_type">Commute Type</label>
            <input type="text" name="commute_type" value="{{ $jobPost->commute_type }}" id=commute_type" row="5" class=" p-2 bg-gray-200 @error('commute_type') is-invalid @enderror">
                @error('commute_type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="">
            <label for="contract_type">Contract Type</label>
            <input type="text" name="contract_type" value="{{ $jobPost->contract_type }}" id=contract_type" row="5" class=" p-2 bg-gray-200 @error('contract_type') is-invalid @enderror">
                @error('contract_type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="">
            <h1>Required Skills</h1>
            @foreach ($jobPost->skills as $skill)
                <label for="skill_name">Skills<label>
                <input type="text" value="{{ $skill->skill_name }}" id="skill_name" name="skill_name">
                <select id="skill_type" name="skill_type">
                    <option value="{{ $skill->skill_type }}">Soft Skill</option>
                    <option value="{{ $skill->skill_type }}">Technical Skill</option>
                </select>
            @endforeach
        </div>
    
        <div class="">
            <h1>Benefits</h1>
            @foreach ($jobPost->benefits as $benefit)
                <label for="benefits">Benefits</label>
                <input type="text" name="benefits" value="{{ $benefit->benefits }}" id="benefits" row="5" class=" p-2 bg-gray-200 @error('benefit') is-invalid @enderror">
                @error('benefits')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            @endforeach
        </div>


        
        
    
            

       

        <button type="submit" class="btn btn-blue">Update</button>
    </form>
</div>
@endsection