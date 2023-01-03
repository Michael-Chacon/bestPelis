<?php

namespace App\Http\Livewire;

use App\Models\Genre;
use Livewire\Component;

class CreateGenre extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required|max:20|unique:genres'
    ];

    public function saveGenre()
    {
        $genero = $this->validate();

        Genre::create([
            'name' => $genero['name'],
        ]);

        session()->flash('mensaje', 'Genero creado con éxito');
        $this->emit('showgenero');
    }

    public function render()
    {
        return view('livewire.create-genre');
    }
}
