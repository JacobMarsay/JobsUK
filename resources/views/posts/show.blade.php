@extends('layouts.app')
@section('content')

<h2>Job Overview</h2>
<ul class="jobpost__list">
    <li>{{ $jobPost->job_title }}</li>
    <li>{{ $jobPost->job_description }}</li>
    <li>{{ $jobPost->salary }}</li>
    <li>{{ $jobPost->commute_type }}</li>
    <li>{{ $jobPost->contract_type }}</li>
</ul>

<h2>Required Skills</h2>
@foreach ($jobPost->skills as $skills)
    <ul>
        <li>{{ $skills->skill_name }}</li>
    </ul>
@endforeach

<h2>Benefits</h2>
@foreach ($jobPost->benefits as $benefits)
    <ul>
        <li>{{ $benefits->benefits }}</li>
    </ul>
@endforeach

<a class="btn btn-blue" href="{{ route('posts.edit', $jobPost->id) }}">Edit</a>


@endsection
