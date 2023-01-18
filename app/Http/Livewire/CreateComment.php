<?php

namespace App\Http\Livewire;

use App\Models\Podcast;
use Livewire\Component;

class CreateComment extends Component
{
    public $modelo;
    public $comment;


    protected $rules = [
        'comment' => 'required',
        
    ];


    public function saveComments()
    {
        $datos = $this->validate();
        // dd($this->modelo);
        $this->modelo->comments()->create(['comment' => $datos['comment'], 'user_id' => auth()->user()->id]);
        $this->emit('showComment');
        $this->reset('comment');
    }

    public function render()
    {
        return view('livewire.create-comment', [
            'modelos' => $this->modelo,
        ]);
    }
}
