<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatAllocation extends Model
{
    use HasFactory;

    protected $table = 'seat_allocations';

    protected $fillable = [
        'trip_id',

        'trip_date',

        'name',
        'phone',

        'ticket_quantity',
        'price',
        'amount',


    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    // Event to automatically fill in the 'name' and 'phone' fields in the 'users' table
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($seatAllocation) {
            $user = User::firstOrCreate(
                ['phone' => $seatAllocation->phone],
                ['name' => $seatAllocation->name]
            );

            $seatAllocation->user_id = $user->id;
        });
    }
}
