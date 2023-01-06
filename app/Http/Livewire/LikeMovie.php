<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikeMovie extends Component
{
    public $movie;
    public $isLike;
    public $like;

    public function mount($movie)
    {
        $this->isLike = $movie->checkLikeMovie(auth()->user());
        $this->like = $movie->likes->count();
    }

    public function like()
    {
        if($this->movie->checkLikeMovie(auth()->user())){
            $this->movie->likes()->delete();
            $this->isLike = false;
            $this->like--;
        }else{
            $this->movie->likes()->create(['user_id' => auth()->user()->id]);
            $this->isLike = true;
            $this->like++;
        }
    }

    public function render()
    {
        return view('livewire.like-movie');
    }
}
