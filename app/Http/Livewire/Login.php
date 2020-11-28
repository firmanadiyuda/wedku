<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{

    public function render()
    {
        return view('livewire.page.login')
            ->layout('layouts.app', ['navbar' => 'off', 'footer' => 'off']);
    }

}
