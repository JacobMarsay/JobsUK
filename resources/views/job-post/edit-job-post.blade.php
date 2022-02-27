
    <h1>Edit Job Post</h1>
    <form class="" action="{{ route('updateJobPost', $jobPost->jobpost_id) }}" method="POST">
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
            <input type="text" name="salary" id="salary" row="5" class=" p-2 bg-gray-200 @error('salary') is-invalid @enderror"> {{ $jobPost->salary }}
            @error('salary')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="">
            <h1>Contract And Commute Details</h1>
            <label for="commute_type">Commute Type</label>
            <input type="text" name="commute_type" id="commute_type" row="5" class=" p-2 bg-gray-200 @error('commute_type') is-invalid @enderror"> {{ $jobPost->commute_type }}
            @error('commute_type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="">
            <label for="contract_type">Contract Type</label>
            <input type="text" name="contract_type" id="contract_type" row="5" class=" p-2 bg-gray-200 @error('contract_type') is-invalid @enderror"> {{ $jobPost->contract_type }}
            @error('contract_type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="">
         <h1>Employment Benefits</h1>
            <label for="benefits">Benefits</label>
            <input type="text" name="benefits" id="benefits" row="5" class=" p-2 bg-gray-200 @error('benefits') is-invalid @enderror"> {{ $benefits->benefits }}
            @error('benefits')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-blue">Update</button>
    </form>
</div>