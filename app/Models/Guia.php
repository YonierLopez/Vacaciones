<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    use HasFactory;
    // Relación con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // Relación con la reserva
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
