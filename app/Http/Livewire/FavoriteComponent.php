<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FavoriteComponent extends Component
{
    public $modelo;
    public $isFavorite;

    public function mount($modelo)
    {
        $this->isFavorite = $modelo->checkFavorites(auth()->user());
    }

    public function favorite()
    {
        if($this->modelo->checkFavorites(auth()->user())){
            $this->modelo->favorites()->delete();
            $this->isFavorite = false;
        }else{
            $this->modelo->favorites()->create(['user_id' => auth()->user()->id]);
            $this->isFavorite = true;
        }

    }
    public function render()
    {
        return view('livewire.favorite-component');
    }
}
