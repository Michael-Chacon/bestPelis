<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class ShowComments extends Component
{
    public $modelo;

    protected $listeners = ['showComment' => 'render', 'eliminarComentario', 'tal' => 'render'];

    public function eliminarComentario(Comment $comentario)
    {
        $comentario->delete();
        $this->emit('tal');
    }

    public function render()
    {
        $comentarios = $this->modelo->comments;
        return view('livewire.show-comments', [
            'comentarios' => $comentarios,
        ]);
    }
}
