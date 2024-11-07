<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function touristPackages()
    {
        return $this->belongsToMany(TouristPackage::class, 'tourist_packages_destinations');
    }

    public function commentsRatings()
    {
        return $this->hasMany(CommentRating::class);
    }
}

