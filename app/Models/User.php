<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'user_reservation');
    }
}

