<?php

namespace App\Http\Livewire;

use App\Models\Platform;
use Livewire\Component;
use Livewire\WithFileUploads;

class PlatformComponent extends Component
{
    public $imagen;
    public $platform;
    public $access;

    use WithFileUploads;

    protected $rules = [
        'platform' => 'required|unique:platforms',
        'access' => 'required',
        'imagen' => 'required'
    ];

    public function savePlatform(){

        $datos = $this->validate();
        $url_img = $this->imagen->store('public/platform');
        $name_image = str_replace('public/platform/', '', $url_img);
        Platform::create([
            'platform' => $datos['platform'],
            'image' => $name_image,
            'access' => $datos['access'],
        ]);

        $this->reset();
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.platform-component');
    }
}
