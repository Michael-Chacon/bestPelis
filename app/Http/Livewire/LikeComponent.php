<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikeComponent extends Component
{
    public $modelo;
    public $isLike;
    public $like;

    public function mount($modelo)
    {
        $this->isLike = $modelo->checkLike(auth()->user());
        $this->like = $modelo->likes->count();
    }

    public function like()
    {
        if($this->modelo->checkLike(auth()->user())){
            $this->modelo->likes()->delete();
            $this->isLike = false;
            $this->like--;
        }else{
            $this->modelo->likes()->create(['user_id' => auth()->user()->id]);
            $this->isLike = true;
            $this->like++;
        }
    }
    public function render()
    {
        return view('livewire.like-component');
    }
}
