<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'donation_id',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }
}