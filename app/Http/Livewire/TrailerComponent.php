<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TrailerComponent extends Component
{
    public $modelo;
    public function render()
    {
        $trailer = $this->modelo->trailers->pluck('url')->first();
        return view('livewire.trailer-component', compact('trailer'));
    }
}
