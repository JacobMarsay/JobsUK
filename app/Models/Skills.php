<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    protected $table = 'skills';
    protected $primaryKey = 'id';
    protected $fillable = [
        'skill_name',
        'skill_type',
    ];

    public function application()
    {
        return $this->belongsToMany(Application::class);
    }

    public function jobpost()
    {
        return $this->belongsToMany(JobPost::class);
    }
}
