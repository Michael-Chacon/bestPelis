<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikeAnime extends Component
{
    public $anime;
    public $isLike;
    public $like;

    public function mount($anime)
    {
        $this->isLike = $anime->checkLikeAnime(auth()->user());
        $this->like = $anime->likes->count();
    }

    public function likeAnime()
    {
        if($this->anime->checkLikeAnime(auth()->user())){
            $this->anime->likes()->delete();
            $this->isLike = false;
            $this->like--;
        }else{
            $this->anime->likes()->create(['user_id' => auth()->user()->id]);
            $this->isLike = true;
            $this->like++;
        }
    }

    public function render()
    {
        return view('livewire.like-anime');
    }
}
