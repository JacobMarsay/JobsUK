<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class References extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    protected $table = 'references';
    protected $primaryKey = 'id';
    protected $fillable = [
        'previous_company_name',
        'employer_name',
        'employer_contact',
        'duration_worked',
        'application_id',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
