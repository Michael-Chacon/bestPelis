<?php

namespace App\Http\Livewire;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePeli extends Component
{
    public $fotoActor;
    public $perfil;
    public $portada;
    public $name;
    public $premiere;
    public $score;
    public $sinopsis;
    public $actors = [];
    public $genres = [];
    
    protected $rules = [
        'name' => 'required|max:30|unique:movies',
        'premiere' => 'required',
        'score' => 'required',
        'sinopsis' => 'required',
        'actors' => 'required',
        'genres' => 'required',
        // 'perfil' => 'required|image|max:2058',
        // 'portada' => 'required|image|max:2058'
    ];

    public function saveMovie()
    {
        $movie = $this->validate();
        
        $peli = Movie::create([
            'name' => $movie['name'],
            'premiere' => $movie['premiere'],
            'sinopsis' => $movie['sinopsis'],
            'score' => $movie['score'],
            'user_id' => auth()->user()->id,
        ]);

        $peli->actors()->attach($movie['actors']);

        $peli->genres()->attach($movie['genres']);
        $this->reset();
    }

    use WithFileUploads;


    public function render()
    {
        $actores = Actor::pluck('id', 'name');
        $generos = Genre::pluck('id', 'name');
        return view('livewire.create-peli', [
            'actores' => $actores,
            'generos' => $generos
        ]);
    }
}
