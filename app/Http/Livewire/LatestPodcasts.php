<?php

namespace App\Http\Livewire;

use App\Models\Podcast;
use Livewire\Component;

class LatestPodcasts extends Component
{
    protected $listeners = ['render'];
    public function render()
    {
        $podcasts = Podcast::with('images')->latest()->limit(6)->get();
        return view('livewire.latest-podcasts',[
            'podcasts' => $podcasts
        ]);
    }
}
