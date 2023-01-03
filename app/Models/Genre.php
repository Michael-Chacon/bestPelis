<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'genreable_id',
        'genreable_type',
        'genre_id',
        'name',
    ];

    use HasFactory;

    public function animes()
    {
        return $this->morphedByMany(Anime::class, 'genreable');
    }

    public function movies()
    {
        return $this->morphedByMany(Movie::class, 'genreable');
    }

    public function series()
    {
        return $this->morphedByMany(Serie::class, 'genreable');
    }

}
