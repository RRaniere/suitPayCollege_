<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request) {
        

        $credenciais = $request->validate([ 
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'Email é obrigatório.',
            'password.required' => 'Digite sua senha.',
        ]);
 

        if(Auth::attempt($credenciais)) { 

            $request->session()->regenerate();
            return redirect()->intended('/');

        }else { 

            return redirect()->back()->withErrors(['message' => 'Email ou senha inválidos.']);

        }

    }

    public function logout(Request $request) { 

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');


    }
}
