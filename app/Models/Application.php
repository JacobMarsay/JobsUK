<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    protected $table = 'application';
    protected $primaryKey = 'id';
    protected $fillable = [
        'career_type',
        'biography',
        'years_of_experience',
        'hobby_description',
        'account_id',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function skills()
    {
        return $this->hasMany(Skills::class);
    }

    public function references()
    {
        return $this->hasMany(References::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }
}
 