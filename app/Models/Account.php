<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'account';
    protected $primaryKey = 'id';

    protected $fillable = [
        'email_address',
        'password',
        'role',
        'person_id',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function application()
    {
        return $this->hasOne(Application::class);
    }
}
