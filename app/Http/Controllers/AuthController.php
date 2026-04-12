<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->validated();

        try {
            User::create($data);

            return redirect()->route('login')->with('success', 'Usuário criado com sucesso!');
        } catch (\Exception $ex) {
            return redirect()->back()->withInput()->with('error', 'Erro ao criar usuário');
        }
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        try {
            if (Auth::attempt($data)) {
                $request->session()->regenerate();
                return redirect()->intended('home');
            }
            return redirect()->back()->with('error', 'Credenciais inválidas');
        } catch (\Exception $ex) {
            return redirect()->back()->withInput()->with('error', 'Erro ao fazer login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
