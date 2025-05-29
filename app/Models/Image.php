<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = ['path', "alt_text", "is_main", "is_top"];


    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
