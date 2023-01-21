<?php

namespace App\Http\Livewire;

use App\Models\Anime;
use Livewire\Component;

class LatestAnimes extends Component
{
    protected $listeners = ['render'];
    
    public function render()
    {
        $animes = Anime::with('images')->latest()->limit(6)->get();
        return view('livewire.latest-animes', compact('animes'));
    }
}
