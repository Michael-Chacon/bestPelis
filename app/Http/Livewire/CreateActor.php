<?php

namespace App\Http\Livewire;

use App\Models\Actor;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateActor extends Component
{
    public $fotoActor;
    public $biografia;
    public $name;

    use  WithFileUploads;

    protected $rules = [
        'name' => 'required|unique:actors',
        'biografia' => 'required',
        'fotoActor' => 'required|image|max:2058'
    ];

    public function saveActor()
    {
        $campos = $this->validate();

        $fotoActor = $this->fotoActor->store('public/actors');
        $fotoActor = str_replace('public/actors','', $fotoActor);

        Actor::create([
            'name' => $campos['name'],
            'biografia' => $campos['biografia'],
            'fotoActor' => $fotoActor
        ]);
        $this->reset();
        $this->emit('showactor');

    }

    public function render()
    {
        return view('livewire.create-actor');
    }
}
