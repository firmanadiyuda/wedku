<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // Inputan yg diambil
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login

            return redirect('berhasil');

            //return redirect()->intended('/details');
        }
        // Jika Gagal
        // return redirect('gagal');
        // $this->emit('toast',['type' => 'error', 'title' => 'error', 'message' => 'error']);
        
    }
}
