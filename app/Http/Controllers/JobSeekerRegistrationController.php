<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Address;
use App\Models\Account;
use App\Models\Application;
use App\Models\Skills;
use App\Models\References;
use App\Models\Education;
// use App\Models\Grades;
// use App\Models\Education_Grades;
use Hash;

class JobSeekerRegistrationController extends Controller
{ 
    protected $person, $address, $account, $application, $skills, $references, $education; 
    //$grades;

    public function __construct(){
        $this->person = new Person();
        $this->address = new Address();
        $this->account = new Account();
        $this->application = new Application();
        $this->skills = new Skills();
        $this->references = new References();
        $this->education = new Education();
        // $this->grades = new Grades();
    }

    public function create(){
        return view ('users/jobseeker-registration');
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required',
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
            // 'course_name' => 'required',
            // 'results' => 'required',
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

        $account = new Account;
        $account->email_address = $request->email_address;
        $account->password = $request->password;
        $account->role = 1;
        $person->account()->save($account);

        $application = new Application;
        $application->career_type = $request->career_type;
        $application->biography = $request->biography;
        $application->years_of_experience = $request->years_of_experience;
        $application->hobby_description = $request->hobby_description;
        $account->application()->save($application);

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
        



        // $person = $this->person->create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'contact_number' => $request->contact_number
        // ]);

        // $address = $this->address->create([
        //     'street_name' => $request->street_name,
        //     'house_number' => $request->house_number,
        //     'postcode' => $request->postcode,
        //     'city' => $request->city,
        //     'county' => $request->county,
        //     'person_id' => $person->id
        // ]);

        // $account = $this->account->create([
        //     'email' => $request->email_address, 
        //     'password' => $request->password,
        //     'role' => 1,
        //     'person_id' => $person->id
        // ]);

        // $application = $this->application->create([
        //     'career_type' => $request->career_type,
        //     'biography' => $request->biography,
        //     'years_of_experience' => $request->years_of_experience,
        //     'hobby_description' => $request->hobby_description,
        //     'account_id' => $account->id
        // ]);

        // $skills = $this->skills->create([
        //     'skill_name' => $request->skill_name,
        //     'skill_type' => $request->skill_type,
        //     'application_id' => $application->id
        // ]);

        // $references = $this->references->create([
        //     'previous_company_name' => $request->previous_company_name,
        //     'employer_name' => $request->employer_name,
        //     'employer_contact' => $request->employer_contact,
        //     'duration_worked' => $request->duration_worked,
        //     'application_id' => $application->id
        // ]);
        
        // $education = $this->education->create([
        //     'place_of_institution' => $request->place_of_institution,
        //     'education_type' => $request->education_type,
        //     'application_id' => $application->id
        // ]);

        // $grades = $this->grades->create([
        //     'course_name' => $request->course_name,
        //     'results' => $request->results
        // ]);



























        // DB::beginTransaction();
        // try{
        //     $person = $this->person->create([
        //         'first_name' => $request->first_name,
        //         'last_name' => $request->last_name,
        //         'contact_number' => $request->contact_number
        //     ]);
    
        //     $address = $this->address->create([
        //         'street_name' => $request->street_name,
        //         'house_number' => $request->house_number,
        //         'postcode' => $request->postcode,
        //         'city' => $request->city,
        //         'county' => $request->county,
        //         'person_id' => $person->id
        //     ]);
    
        //     $account = $this->account->create([
        //         'email' => $request->email_address,
        //         'password' => $request->password,
        //         'role' => 1,
        //         'person_id' => $person->id
        //     ]);
    
        //     $application = $this->application->create([
        //         'career_type' => $request->career_type,
        //         'biography' => $request->biography,
        //         'years_of_experience' => $request->years_of_experience,
        //         'hobby_description' => $request->hobby_description,
        //         'account_id' => $account->id
        //     ]);
    
        //     $skills = $this->skills->create([
        //         'skill_name' => $request->skill_name,
        //         'skill_type' => $request->skill_type,
        //         'application_id' => $application->id
        //     ]);
    
        //     $references = $this->references->create([
        //         'previous_company_name' => $request->previous_company_name,
        //         'employer_name' => $request->employer_name,
        //         'employer_contact' => $request->employer_contact,
        //         'duration_worked' => $request->duration_worked,
        //         'application_id' => $application->id
        //     ]);
            
        //     $education = $this->education->create([
        //         'place_of_institution' => $request->place_of_institution,
        //         'education_type' => $request->education_type,
        //         'application_id' => $application->id
        //     ]);
    
        //     $grades = $this->grades->create([
        //         'course_name' => $request->course_name,
        //         'results' => $request->results
        //     ]);
        //     if($person && $address && $account && $application && $skills && $references && $education && $grades){
        //         DB::commit();
        //     }
        //     else {
        //         DB::rollback();
        //     }
        //     return redirect()->back();
        // }
        // catch(Exception $exception){
        //     DB::rollback();
        //     return redirect()->back();
        // }

        
        

        // $this->education_grades->create([
        //     'education_id' => $request->education_id,
        //     'grades_id' => $request->grades_id
        // ]);
       
       
        // $person->first_name = $request->first_name;
        // $person->last_name = $request->last_name;
        // $person->contact_number = $request->contact_number;
        // $person->save();
    } 
}


// function save(Request $request)
// {
//     $this->validate($request, [
//         'title' => 'required|max:100',
//         'year' => 'required|integer|min:1900',
//         'duration' => 'required|integer|min:1|max:300',
//     ]);
//     //create the new film
//     $film = new Film();
//     $film->title = $request->title;
//     $film->year=$request->year;
//     $film->duration=$request->duration;
//     //assign certificate to film
//     $certificate = Certificate::find($request->certificate);
//     $film->certificate()->associate($certificate);

//     $film->save();
//     return redirect('list');
// }