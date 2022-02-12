<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'person';
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'contact_number',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    Public function account()
    {
        return $this->hasOne(Account::class);
    }
}
