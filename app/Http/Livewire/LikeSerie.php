<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class LikeSerie extends Component
{
    public $serie;
    public $isLike;
    public $like;

    public function mount($serie)
    {
        $this->isLike = $serie->checkLikeSerie(auth()->user());
        $this->like = $serie->likes->count();
    }

    public function likeSerie()
    {
        if($this->serie->checkLikeSerie(auth()->user())){
            $this->serie->likes()->delete();
            $this->isLike = false;
            $this->like--;
        }else{
            $this->serie->likes()->create(['user_id' => auth()->user()->id]);
            $this->isLike = true;
            $this->like++;
        }
    }

    public function render()
    {
        return view('livewire.like-serie');
    }
}
