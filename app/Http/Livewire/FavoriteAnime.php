<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FavoriteAnime extends Component
{
    public $anime;
    public $isFavorite;

    public function mount($anime)
    {
        $this->isFavorite = $anime->checkFavoriteAnime(auth()->user());
    }

    public function favoriteAnime()
    {
        if($this->anime->checkFavoriteAnime(auth()->user())){
            $this->anime->favorites()->delete();
            $this->isFavorite = false;
        }else{
            $this->anime->favorites()->create(['user_id' => auth()->user()->id]);
            $this->isFavorite = true;
        }

    }

    public function render()
    {
        return view('livewire.favorite-anime');
    }
}
