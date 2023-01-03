<?php

namespace App\Http\Livewire;

use App\Models\Genre;
use Livewire\Component;

class ShowGenre extends Component
{
    protected $listeners =['showgenero' => 'render'];

    public function render()
    {
        $estado = false;
        $generos = Genre::get();
        return view('livewire.show-genre', [
            'genres' => $generos,
            'estado' => $estado, 
        ]);
    }
}
