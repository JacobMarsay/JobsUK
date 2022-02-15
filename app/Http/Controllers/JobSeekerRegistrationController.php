<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Address;
use App\Models\User;
use App\Models\Application;
use App\Models\Skills;
use App\Models\References;
use App\Models\Education;
use App\Models\Grades;
use Hash;

class JobSeekerRegistrationController extends Controller
{ 
    protected $person, $address, $user, $application, $skills, $references, $education, $grades;

    // public function __construct(){
    //     $this->person = new Person();
    //     $this->address = new Address();
    //     $this->user = new User();
    //     $this->application = new Application();
    //     $this->skills = new Skills();
    //     $this->references = new References();
    //     $this->education = new Education();
    //     $this->grades = new Grades();
    // }

    public function create(){
        return view ('users/jobseeker-registration');
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'password' => 'required',
            'street_name' => 'required',
            'house_number' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'county' => 'required',
            'career_type' => 'required',
            'biography' => 'required',
            'years_of_experience' => 'required',
            'hobby_description' => 'required',
            'skill_name' => 'required',
            'skill_type' => 'required',
            'previous_company_name' => 'required',
            'employer_name' => 'required',
            'employer_contact' => 'required',
            'duration_worked' => 'required',
            'place_of_institution' => 'required',
            'education_type' => 'required',
            'course_name' => 'required',
            'results' => 'required',
        ]);

        $person = new Person;
        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->contact_number = $request->contact_number;
        $person->save();

        $address = new Address;
        $address->street_name = $request->street_name;
        $address->house_number = $request->house_number;
        $address->postcode = $request->postcode;
        $address->city = $request->city;
        $address->county = $request->county;
        $person->address()->save($address);

        $user = new User;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = 1;
        $person->user()->save($user);

        $application = new Application;
        $application->career_type = $request->career_type;
        $application->biography = $request->biography;
        $application->years_of_experience = $request->years_of_experience;
        $application->hobby_description = $request->hobby_description;
        $user->application()->save($application);

        $skills = new Skills;
        $skills->skill_type = $request->skill_type;
        $skills->skill_name = $request->skill_name;
        $application->skills()->save($skills);

        $references = new References;
        $references->previous_company_name = $request->previous_company_name;
        $references->employer_name = $request->employer_name;
        $references->employer_contact = $request->employer_contact;
        $references->duration_worked = $request->duration_worked;
        $application->references()->save($references);

        $education = new Education;
        $education->place_of_institution = $request->place_of_institution;
        $education->education_type = $request->education_type;
        $application->education()->save($education);

        $grades = new Grades;
        $grades->course_name = $request->course_name;
        $grades->results = $request->results;
        $education->grades()->save($grades);

        return redirect('/');
        
    } 
}
