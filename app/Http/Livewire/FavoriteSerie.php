<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FavoriteSerie extends Component
{
    public $serie;
    public $isFavorite;

    public function mount($serie)
    {
        $this->isFavorite = $serie->checkFavoriteSerie(auth()->user());
    }

    public function favoriteSerie()
    {
        if($this->serie->checkFavoriteSerie(auth()->user())){
            $this->serie->favorites()->delete();
            $this->isFavorite = false;
        }else{
            $this->serie->favorites()->create(['user_id' => auth()->user()->id]);
            $this->isFavorite = true;
        }

    }


    public function render()
    {
        return view('livewire.favorite-serie');
    }
}
