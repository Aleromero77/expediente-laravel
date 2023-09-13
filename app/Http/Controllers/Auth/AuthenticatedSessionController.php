<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    public function iniciarSesion(Request $request)
    {
        $request->validate([
            'correo' => ['required', 'email'],
            'contrasena' => ['required']
        ]);

        $usuario = User::where('correo', $request->correo)->first();
        if ($usuario) {
            if (Hash::check($request->contrasena, $usuario->contrasena)) {
                Auth::login($usuario);
                $request->session()->regenerate();
                return redirect()->intended('inicio');
            } else {
                return redirect(route('welcome'));
            }
        }
    }

    public function cerrarSesion(Request $request){

        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('welcome'));
        
    }
}