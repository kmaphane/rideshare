<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'user_id',
        'origin',
        'destination',
        'destination_name',
        'driver_location',
        'is_started',
        'is_complete',
    ];

    protected $casts = [
        'origin' => 'json',
        'destination' => 'json',
        'driver_location' => 'json',
        'is_started' => 'boolean',
        'is_complete' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
