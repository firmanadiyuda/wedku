<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function show()
    {
        $this->emit('toast', ['type'=>'info', 'title'=>'Login Gagal', 'message'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus ad explicabo ipsum, accusantium exercitationem dolores laborum dicta itaque nisi deleniti illo nam, excepturi quod tenetur nostrum optio veniam nemo cupiditate!']);
    }

    public function render()
    {
        return view('livewire.page.home')
            ->layout('layouts.app', ['navbar' => 'on', 'footer' => 'on']);
    }
}
