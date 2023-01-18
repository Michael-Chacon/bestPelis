<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikePodcast extends Component
{
    public $podcast;
    public $isLike;
    public $like;

    public function mount($podcast)
    {
        $this->isLike = $podcast->checkLikePodcast(auth()->user());
        $this->like = $podcast->likes()->count();
    }

    public function likePodcast()
    {
        if($this->podcast->checkLikePodcast(auth()->user())){
            $this->podcast->likes()->delete();
            $this->isLike = false;
            $this->like--;
        }else{
            $this->podcast->likes()->create(['user_id' => auth()->user()->id]);
            $this->isLike = true;
            $this->like++;
        }
    }

    public function render()
    {
        return view('livewire.like-podcast');
    }
}
