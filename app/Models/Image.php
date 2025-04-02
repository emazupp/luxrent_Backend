<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
