<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    // Relación a través de la tabla intermedia 'guia'
    public function guias()
    {
        return $this->hasMany(Guia::class);
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Guia::class);
    }
}
