<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $fillable = [
        'name',
        'description',
        'score',
        'url',
        'chapters',
        'status',
        'authors',
        'user_id',
    ];
    protected $dates = [''];
    
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function catetory()
    {
        return $this->belongsTo(Category::class);
    }

    // Relaciones polimorificas uno a muchso 
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->latest()->with('user');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    // Relación polimorfica muchos a muchos 
    public function genres()
    {
        return $this->morphToMany(Genre::class, 'genreable');
    }

    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favoriteable');
    }

    public function checkLike(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    
    public function checkFavorites(User $user)
    {
    return $this->favorites->contains('user_id', $user->id);
    }
}
