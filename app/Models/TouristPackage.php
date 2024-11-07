<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TouristPackage extends Model
{
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'reservation_tourist_packages');
    }

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'tourist_packages_destinations');
    }

    public function billings()
    {
        return $this->hasMany(Billing::class);
    }
}

