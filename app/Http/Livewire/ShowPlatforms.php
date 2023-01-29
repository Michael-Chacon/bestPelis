<?php

namespace App\Http\Livewire;

use App\Models\Platform;
use Livewire\Component;

class ShowPlatforms extends Component
{
    protected $listeners = ['render'];
    public function render()
    {
        $platforms = Platform::get();
        return view('livewire.show-platforms', compact('platforms'));
    }
}
