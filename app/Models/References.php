<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class References extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'previous_company_name',
        'employer_name',
        'employer_contact',
        'duration_worked',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
