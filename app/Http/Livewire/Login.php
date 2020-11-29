<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;
    public $remember_me;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function authenticate()
    {
        $validatedData = $this->validate();

        if (Auth::attempt($validatedData, $this->remember_me)) {

            $user = Auth::user();

            $this->dispatchBrowserEvent('toast', [
                'type' => 'success',
                'title' => 'Login Berhasil',
                'message' => 'Hai, ' . $user->name,
            ]);
            
            return redirect()->intended('/dashboard');

        } else {
            $this->dispatchBrowserEvent('toast', [
                'type' => 'error',
                'title' => 'Login Gagal',
                'message' => 'Maaf, email atau password kamu salah.',
                ]);
        }   
    }
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.page.login')
            ->layout('layouts.app', ['navbar' => 'off', 'footer' => 'off']);
    }

}
