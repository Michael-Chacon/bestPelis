<?php

namespace App\Http\Livewire;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePeli extends Component
{
    public $perfil;
    public $portada;
    public $name;
    public $premiere;
    public $score;
    public $sinopsis;
    public $actors = [];
    public $genres = [];
    public $trailer;
    
    protected $rules = [
        'name' => 'required|max:30|unique:movies',
        'premiere' => 'required',
        'score' => 'required',
        'sinopsis' => 'required',
        'actors' => 'required',
        'genres' => 'required',
        'perfil' => 'required|image|max:2058',
        'portada' => 'required|image|max:2058',
        'trailer' => 'required|string'

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

        // Guardar generos y actores
        $peli->actors()->attach($movie['actors']);
        $peli->genres()->attach($movie['genres']);

        // Guradar imagene de perfil y de portada
        $perfil = $this->perfil->store('public/perfil');
        $url_perfil = str_replace('public/perfil/', '', $perfil);

        $portada = $this->portada->store('public/portada');
        $url_portada = str_replace('public/portada/', '', $portada);

        $peli->images()->create(['url' => $url_perfil, 'destination' => 'perfil']);
        $peli->images()->create(['url' => $url_portada, 'destination' => 'portada']);

        // Registrar trailer 
        $peli->trailers()->create(['url' => $movie['trailer']]);

        $this->reset();
        $this->emit('render');
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
