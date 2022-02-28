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
    @foreach ($posts as $jobPost)
        <div class="items">
            <article>
                <h3><a href="{{ route('posts.show', $jobPost->id) }}">{{ $jobPost->job_title }}</a></h3>
                <p>{{ $jobPost->salary }}</p>
                <p>{{ $jobPost->contract_type }}</p>
                <p>{{ $jobPost->commute_type }}</p>
                <a class="btn btn-blue" href="{{ route('posts.show', $jobPost->id) }}">Show</a>
            </article>
        </div>
    @endforeach
    <div class="pagination-container">
        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>
</div>



@endsection

