<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefits extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    protected $table = 'benefits';
    protected $primaryKey = 'id';
    protected $fillable = [
        'benefits',
    ];

    public function jobpost()
    {
        return $this->belongsToMany(JobPost::class);
    }
}
