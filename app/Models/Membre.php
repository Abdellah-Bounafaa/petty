<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membre extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'country',
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'password',
    ];
}
