<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller {

    public function index(): View {
        return view('auth.login.login');
    }

    /* POST /auth/login */
    public function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        $validation = auth()->validate([
            'email' => $email,
            'password' => $password
        ]);

        if(!$validation) {
            return back()->withErrors(['email' => 'Credenciales inválidas']);
        }

        $user = User::whereEmail($email)->first();
        auth()->login($user);
        return redirect()->route('bienvenido');
    }

}
