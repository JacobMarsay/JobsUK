<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'skill_name',
        'skill_type',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
