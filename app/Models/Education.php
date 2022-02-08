<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function grades()
    {
        return $this->belongsToMany(Grades::class);
    }
}
