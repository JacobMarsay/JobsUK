<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education_Grades extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'eduction_id',
        'grades_id',
    ];
}
