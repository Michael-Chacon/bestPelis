<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FavoritePodcast extends Component
{

    public $podcast;
    public $isFavorite;

    public function mount($podcast)
    {
        $this->isFavorite = $podcast->checkFavoritePodcast(auth()->user());
    }

    public function favoritePodcast()
    {
        if($this->podcast->checkFavoritePodcast(auth()->user())){
            $this->podcast->favorites()->delete();
            $this->isFavorite = false;
        }else{
            $this->podcast->favorites()->create(['user_id' => auth()->user()->id]);
            $this->isFavorite = true;
        }

    }
    public function render()
    {
        return view('livewire.favorite-podcast');
    }
}
