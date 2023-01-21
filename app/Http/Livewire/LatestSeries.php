<?php

namespace App\Http\Livewire;

use App\Models\Serie;
use Livewire\Component;

class LatestSeries extends Component
{
    protected $listeners = ['render'];
    public function render()
    {
        $series = Serie::with('images')->latest()->limit(6)->get();
        return view('livewire.latest-series', compact('series'));
    }
}
