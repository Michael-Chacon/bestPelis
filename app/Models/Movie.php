<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'sinopsis',
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relaciones polimorificas uno a muchso 
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // Relación polimorfica muchos a muchos 
    public function genres()
    {
        return $this->morphToMany(Genre::class, 'genreable');
    }

    public function actors()
    {
        return $this->morphToMany(Actor::class, 'actorable');
    }

    public function images()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

}
