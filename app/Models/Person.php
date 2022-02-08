<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    Public function account()
    {
        return $this->hasOne(Account::class);
    }
}
