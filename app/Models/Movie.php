<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'premiere',
        'sinopsis',
        'score',
        'user_id',
    ];

    protected $dates = ['premiere'];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relaciones polimorificas uno a muchso 
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->latest();
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
        return $this->morphMany(Image::class, 'imageable');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favoriteable');
    }

    public function checkLikeMovie(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function checkFavoritesMovies(User $user)
    {
        return $this->favorites->contains('user_id', $user->id);
    }


}
