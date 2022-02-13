<h1>JobSeeker Registration</h1>
<form class="" action="{{ route('storeJobSeeker') }}" method="POST">
    @csrf
    <h1>Personal Details</h1>
    <p>Please enter your personal details.</p>
    <label for="first_name">First Name:<label>
    <input type="text" id="first_name" name="first_name">
    <label for="last_name">Last Name:<label>
    <input type="text" id="last_name" name="last_name">
    <label for="contact_number">Phone Number:<label>
    <input type="tel" id="contact_number" name="contact_number">
    <label for="email_address">Email Address:<label>
    <input type="email" id="email_address" name="email_address">
    <label for="password">Password:<label>
    <input type="password" id="password" name="password">

    <h1>Address Details</h1>
    <p>Please enter your address details.</p>
    <label for="street_name">Street Name:<label>
    <input type="text" id="street_name" name="street_name">
    <label for="house_number">House/Flat Number:<label>
    <input type="text" id="house_number" name="house_number">
    <label for="postcode">Postcode:<label>
    <input type="text" id="postcode" name="postcode">
    <label for="city">City:<label>
    <input type="text" id="city" name="city">
    <label for="county">County:<label>
    <input type="text" id="county" name="county">

    <h1>Career Type</h1>
    <p>Please enter the type of Job you would like to apply for.</p>
    <label for="career_type">Career Type:<label>
    <input type="text" id="career_type" name="career_type">

    <h1>Skill Set</h1>
    <p>Please enter your soft and technical skills.</p>
    <label for="skill_type">Skill Type:<label>
    <select id="skill_type" name="skill_type" size="2">
        <option value="technicalskill">Technical Skill</option>
        <option value="softskill">Soft Skill</option>
    </select>
    <label for="skill_name">Skill:<label>
    <input type="text" id="skill_name" name="skill_name">

    <h1>Years of Experience</h1>
    <p>How many years of experience have you worked in your profession?</p>
    <label for="years_of_experience">Years of Experience:<label>
    <input type="number" id="years_of_experience" name="years_of_experience">

    <h1>Education</h1>
    <p>Please your past education information.</p>
    <label for="place_of_institution">Institution:<label>
    <input type="text" id="place_of_institution" name="place_of_institution">
    <label for="education_type">Certificate Type:<label>
    <select id="education_type" name="education_type" size="2">
        <option value="gcse">GCSE</option>
        <option value="a_level">A Level</option>
        <option value="diploma">Diploma</option>
        <option value="foundation_level">Foundation Level</option>
        <option value="bachelor">Bachelor Degree</option>
        <option value="masters_degree">Masters Degree</option>
        <option value="phd">PHD</option>
        <option value="other_education">Other</option>
    </select>
    <label for="course_name">Course:<label>
    <input type="text" id="course_name" name="course_name">
    <label for="results">Grades:<label>
    <input type="text" id="results" name="results">

    <h1>Biography</h1>
    <p>Please write your biography here. NOTE: This is the main part of your application form so please be descriptive. Think about past achievements and why you are great at what you do.</p>
    <label for="biography">Biography:<label>
    <textarea id="biography" name="biography"></textarea>
    
    <h1>Hobbies & Activities</h1>
    <p>Do you have any hobbies, or participate in any regular activities? Please be descriptive as this will help the employer to get to know you.</p>
    <label for="hobby_description">Hobbies & Activities:<label>
    <textarea id="hobby_description" name="hobby_description"></textarea>
    
    <h1>References</h1>
    <p>Please enter past employment information</p>
    <label for="previous_company_name">Company Name:<label>
    <input type="text" id="previous_company_name" name="previous_company_name">
    <label for="employer_name">Employer Name:<label>
    <input type="text" id="employer_name" name="employer_name">
    <label for="employer_contact">Employers Contact Details:<label>
    <input type="text" id="employer_contact" name="employer_contact">
    <label for="duration_worked">Duration Worked:<label>
    <input type="number" id="duration_worked" name="duration_worked">

    <button type="submit" class="btn btn-blue">Register</button>
</form>