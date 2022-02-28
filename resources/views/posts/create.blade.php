@extends('layouts.app')
@section('content')
<h1>Create Job Post</h1>
<form class="" action="{{ route('posts.store') }}" method="POST">
    @csrf
    <h1>Job Information</h1>
    <label for="job_title">Job Title<label>
    <input type="text" id="job_title" name="job_title">
    <label for="job_description">Job Description<label>
    <textarea id="job_description" name="job_description"></textarea>

    <h1>Salary</h1>
    <label for="salary">Salary:<label>
    <input type="text" id="salary" name="salary">

    <h1>Contract And Commute Details</h1>
    <label for="commute_type">Type of Commute:<label>
    <input type="text" id="commute_type" name="commute_type">
    <label for="contract_type">Contract Length:<label>
    <input type="text" id="contract_type" name="contract_type">

    <h1>Employment Benefits</h1>
    <label for="benefits">Benefits<label>
    <input type="text" id="benefits" name="benefits">

    <button type="submit" class="btn btn-blue">Add Post</button>

</form>
@endsection