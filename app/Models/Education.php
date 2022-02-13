<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    protected $table = 'education';
    protected $primaryKey = 'id';
    protected $fillable = [
        'place_of_institution',
        'education_type',
        'application_id',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function grades()
    {
        return $this->belongsToMany(Grades::class);
    }
}
