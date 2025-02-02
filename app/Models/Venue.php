<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'opening_time',
        'closing_time',
    ];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function bookings()
    {
       return $this->hasMany(Booking::class);
    }
}
