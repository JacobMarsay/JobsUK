@extends('layouts.app')
@section('content')
<h1>Company Dashboard </h1>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<h1 class="title">Your Job Posts</h1>

<div class="item-list">
    @foreach ($jobPosts as $jobPost)
        <div class="items">   
            <p>{{ $jobPost->job_title }}</p>
            <p>{{ $jobPost->salary }}</p>
            <p>{{ $jobPost->contract_type }}</p>
            <p>{{ $jobPost->commute_type }}</p>
            <a href="{{ route('showJobPost', $jobPost->user_id) }}">Show</a>
        </div>
    @endforeach
</div>

<div class="pagination-container">
    <div class="pagination">
        {{ $jobPosts->links() }}
    </div>
</div>

@endsection