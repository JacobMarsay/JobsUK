<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $table = 'grades';
    protected $primaryKey = 'id';

    protected $fillable = [
        'course_name',
        'results',
    ];

    public function education()
    {
        return $this->belongsToMany(Education::class);
    }
}
