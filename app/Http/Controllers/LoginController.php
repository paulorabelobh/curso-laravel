<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request) {
        $credenciais = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],[
                'email.required' => "O campo e-mail é obrigatório!",
                'email.email' => "O campo e-mail não é válido",
                'password.required' => "O campo passowrd é obrigatório!",
                'password.password' => "O campo passowrd não é válido!"
            ]
        );

        if (Auth::attempt($credenciais,$request->remember)) { // se consegui logar
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        } else {
            return redirect()->back()->with('erro','Email ou senha inválida.');
        }       
    }
     
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('site.index'));
    }

    public function create() {
        return view('login.create');  
    }

}
