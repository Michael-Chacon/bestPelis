<?php

namespace App\Http\Livewire;

use App\Models\Actor;
use Livewire\Component;

class ShowActor extends Component
{
    protected $listeners =['showactor' => 'render', 'eliminarActor'];

    public function eliminarActor(Actor $actor)
    {
        $actor->delete();
    }

    public function render()
    {
        $actors = Actor::get();
        return view('livewire.show-actor', [
            'actors' => $actors,
        ]);
    }
}
