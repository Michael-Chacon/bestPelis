<?php

namespace App\Http\Livewire;

use App\Models\Genre;
use Livewire\Component;

class ShowGenre extends Component
{
    protected $listeners =['showgenero' => 'render', 'eliminarGenero'];

    public function eliminarGenero(Genre $genre)
    {
        $genre->delete();
    }

    public function render()
    {
        $generos = Genre::get();
        return view('livewire.show-genre', [
            'genres' => $generos
        ]);
    }
}
