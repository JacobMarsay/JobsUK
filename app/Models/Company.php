<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'company';
    protected $primaryKey = 'id';

    protected $fillable = [
        'company_name',
        'founded',
        'staff_capacity',
    ];

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    // public function job_post()
    // {
    //     return $this->hasMany(Job_Post::class);
    // }
    
}
