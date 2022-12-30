<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->morphedByMany(Movie::class, 'actorable');
    }

    public function series()
    {
        return $this->morphedByMany(Serie::class, 'actorable');
    }

    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
