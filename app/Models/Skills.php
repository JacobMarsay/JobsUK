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
        'application_id',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
