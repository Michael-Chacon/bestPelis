<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nameEn',
        'premiere',
        'sinopsis',
        'score',
        'seasons',
        'status',
        'user_id'
    ];

    protected $dates = ['premiere'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relaciones polimorificas uno a muchso 
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->latest()->with('user');;
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
    
    public function seens()
    {
        return $this->morphMany(Seen::class, 'seensable');
    }

    public function trailers()
    {
        return $this->morphMany(Trailer::class, 'trailersable');
    }

    public function checkLike(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function checkFavorites(User $user)
    {
        return $this->favorites->contains('user_id', $user->id);
    }

    public function checkWatched(User $user)
    {
        return $this->seens->contains('user_id', $user->id);
    }
}
