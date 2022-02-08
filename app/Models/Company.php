<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function account()
    {
        return $this->hasMany(Account::class);
    }
    
}
