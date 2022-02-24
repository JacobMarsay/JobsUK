<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'jobpost';
    protected $primaryKey = 'id';
    protected $fillable = [
        'job_title',
        'job_description',
        'salary',
        'commute_type',
        'contract_type',
        'post_date',
    ];

    // public function company()
    // {
    //     return $this->belongsTo(Company::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skills()
    {
        return $this->hasMany(Skills::class);
    }

    public function benefits()
    {
        return $this->belongsToMany(Benefits::class);
    }
}
