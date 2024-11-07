<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_reservation');
    }

    public function touristPackages()
    {
        return $this->belongsToMany(TouristPackage::class, 'reservation_tourist_packages');
    }
}
