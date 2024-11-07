<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    // Relación a través de la tabla intermedia 'guia'
    public function guias()
    {
        return $this->hasMany(Guia::class);
    }

    public function reservations()
    {
        return $this->hasManyThrough(Reservation::class, Guia::class);
    }
}
