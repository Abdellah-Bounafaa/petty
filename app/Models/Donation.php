<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'donation_title',
        'donation_picture',
        'type',
        'description',
        'user_id', "status"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
