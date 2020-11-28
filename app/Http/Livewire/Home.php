<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function show()
    {
        $this->emit('toast', ['type'=>'info', 'title'=>'judul', 'message'=>'s']);
    }

    public function render()
    {
        return view('livewire.page.home')
            ->layout('layouts.app', ['navbar' => 'on', 'footer' => 'on']);
    }
}
