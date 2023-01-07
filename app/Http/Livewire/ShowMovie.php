<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class ShowMovie extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $movies = Movie::latest()->limit(6)->get();
        return view('livewire.show-movie', [
            'movies' => $movies,
        ]);
    }
}
