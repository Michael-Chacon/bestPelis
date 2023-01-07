<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FavoriteMovie extends Component
{
    public $movie;
    public $isFavorite;

    public function mount($movie)
    {
        $this->isFavorite = $movie->checkFavoritesMovies(auth()->user());
    }

    public function saveFavorite()
    {
        if($this->movie->checkFavoritesMovies(auth()->user())){
            $this->movie->favorites()->delete();
            $this->isFavorite = false;
        }else{
            $this->movie->favorites()->create(['user_id' => auth()->user()->id]);
            $this->isFavorite = true;
        } 
    }
    
    public function render()
    {
        return view('livewire.favorite-movie');
    }
}
