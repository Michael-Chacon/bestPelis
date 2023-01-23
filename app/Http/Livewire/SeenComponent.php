<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SeenComponent extends Component
{
    public $modelo;
    public $isSee;

    public function mount($modelo)
    {
        $this->isSee = $modelo->checkWatched(auth()->user());
    }

    public function seen()
    {
        if($this->modelo->checkWatched(auth()->user())){
            $this->modelo->seens()->delete();
            $this->isSee = false;
        }else{
            $this->modelo->seens()->create(['user_id' => auth()->user()->id]);
            $this->isSee = true;
        }
    }

    public function render()
    {
        return view('livewire.seen-component');
    }
}
