<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'address';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'street_name',
        'house_number',
        'postcode',
        'city',
        'county',
        'person_id',
        'company_id',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class); 
    }
}

