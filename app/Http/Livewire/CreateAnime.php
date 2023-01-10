<?php

namespace App\Http\Livewire;

use App\Http\Middleware\Authenticate;
use App\Models\Anime;
use App\Models\Genre;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAnime extends Component
{
    public $perfil;
    public $portada;
    public $name;
    public $premiere;
    public $sinopsis;
    public $score;
    public $seasons;
    public $status;
    public $genres = [];
    
    use WithFileUploads;

    protected $rules = [
        'name' => 'required|max:50|unique:series',
        'premiere' => 'required',
        'sinopsis' => 'required',
        'score' => 'required', 
        'seasons' => 'required',
        'status' => 'required',
        'genres' => 'required',
        'perfil' => 'required|image|max:2058',
        'portada' => 'required|image|max:2058'
    ];

    public function saveAnime()
    {
        $datos = $this->validate();

        $anime = Anime::create([
            'name' => $datos['name'],
            'premiere' => $datos['premiere'],
            'sinopsis' => $datos['sinopsis'],
            'score' => $datos['score'],
            'seasons' => $datos['seasons'],
            'status' => $datos['status'],
            'user_id' => auth()->user()->id,
        ]);
        
        $anime->genres()->attach($datos['genres']);

        $perfil = $this->perfil->store('public/perfil');
        $url_perfil = str_replace('public/perfil/', '', $perfil);

        $portada = $this->portada->store('public/portada');
        $url_portada = str_replace('public/portada/', '', $portada);

        $anime->images()->create(['url' => $url_perfil, 'destination' => 'perfil']);
        $anime->images()->create(['url' => $url_portada, 'destination' => 'portada']);

        $this->reset();
        $this->emit('render');
    }    

    public function render()
    {
        $generos = Genre::pluck('id', 'name');
        return view('livewire.create-anime', [
            'generos' => $generos,
        ]);
    }
}
