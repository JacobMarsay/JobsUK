<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Address;
use App\Models\Account;

use Hash;

class CompanyRegistrationController extends Controller
{
    protected $company, $address, $account;


    public function create(){
        return view ('users/company-registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'founded' => 'required',
            'staff_capacity' => 'required',
            'email_address' => 'required',
            'password' => 'required',
            'street_name' => 'required',
            'house_number' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'county' => 'required',
        ]);
        
        $company = new Company;
        $company->company_name = $request->company_name;
        $company->founded = $request->founded;
        $company->staff_capacity = $request->staff_capacity;
        $company->save();

        $address = new Address;
        $address->street_name = $request->street_name;
        $address->house_number = $request->house_number;
        $address->postcode = $request->postcode;
        $address->city = $request->city;
        $address->county = $request->county;
        $company->address()->save($address);

        $account = new Account;
        $account->email_address = $request->email_address;
        $account->password = $request->password;
        $account->role = 2;
        $company->account()->save($account);
    }
}
