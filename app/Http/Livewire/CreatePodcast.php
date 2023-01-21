<?php

namespace App\Http\Livewire;

use App\Models\Genre;
use App\Models\Podcast;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePodcast extends Component
{
    public $name;
    public $description;
    public $url;
    public $score;
    public $chapters;
    public $status;
    public $authors;
    public $perfil;
    public $genres;
    
    use WithFileUploads;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'url' => 'required',
        'score' => 'required',
        'chapters' => 'required',
        'status' => 'required',
        'authors' => 'required',
        'genres' => 'required',
        'perfil' => 'required',
    ];

    public function savePodcast()
    {
        $datos = $this->validate();
        $limpio = array_filter($datos['genres']);
        $podcast = Podcast::create([
            'name' => $datos['name'],
            'description' => $datos['description'], 
            'url' => $datos['url'],
            'score' => $datos['score'],
            'chapters' => $datos['chapters'],
            'status' => $datos['status'],
            'authors' => $datos['authors'],
            'user_id' => auth()->user()->id,
        ]);
        
        $podcast->genres()->attach($limpio);

        $perfil = $this->perfil->store('public/perfil');
        $name_perfil  = str_replace('public/perfil/', '', $perfil);

        $podcast->images()->create(['url' => $name_perfil, 'destination' => 'perfil']);
        $this->reset();
        $this->emit('render');

    }

    public function render()
    {
        $generos = Genre::pluck('id', 'name');
        return view('livewire.create-podcast', [
            'generos' => $generos,
        ]);
    }
}
