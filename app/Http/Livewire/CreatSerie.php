<?php

namespace App\Http\Livewire;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Serie;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatSerie extends Component
{
    public $perfil;
    public $portada;
    public $name;
    public $nameEn;
    public $premiere;
    public $sinopsis;
    public $score;
    public $seasons;
    public $status; 
    public $genres = [];
    public $actors = [];

    use WithFileUploads;

    protected $rules = [
        'name' => 'required|max:50|unique:series',
        'nameEn' => 'required|max:50|unique:series',
        'premiere' => 'required',
        'sinopsis' => 'required',
        'score' => 'required', 
        'seasons' => 'required',
        'status' => 'required',
        'genres' => 'required',
        'actors' => 'required',
        'perfil' => 'required|image|max:2058',
        'portada' => 'required|image|max:2058'
    ];

    public function saveSerie(){

        $datos = $this->validate();

        $serie = Serie::create([
            'name' => $datos['name'],
            'nameEn' => $datos['nameEn'],
            'premiere' => $datos['premiere'],
            'sinopsis' => $datos['sinopsis'],
            'score' => $datos['score'], 
            'seasons' => $datos['seasons'],
            'status' => $datos['status'],
            'user_id' => auth()->user()->id
        ]);

        // Guardar generos y actores
        $serie->actors()->attach($datos['actors']);
        $serie->genres()->attach($datos['genres']);

        // Guradar imagene de perfil y de portada
        $perfil = $this->perfil->store('public/perfil');
        $url_perfil = str_replace('public/perfil/', '', $perfil);

        $portada = $this->portada->store('public/portada');
        $url_portada = str_replace('public/portada/', '', $portada);

        $serie->images()->create(['url' => $url_perfil, 'destination' => 'perfil']);
        $serie->images()->create(['url' => $url_portada, 'destination' => 'portada']);
        $this->reset();
        $this->emit('render');

    }

    public function render()
    {

        $actores = Actor::pluck('id', 'name');
        $generos = Genre::pluck('id', 'name');
        return view('livewire.creat-serie', [
            'actores' => $actores,
            'generos' => $generos,
        ]);
    }
}
