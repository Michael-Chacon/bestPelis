<?php

namespace App\Http\Livewire;

use App\Models\Serie;
use Livewire\Component;

class LatestSeries extends Component
{
    public function render()
    {
        $series = Serie::latest()->limit(6)->get();
        return view('livewire.latest-series', compact('series'));
    }
}
