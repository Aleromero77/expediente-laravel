<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

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

    public function cerrarSesion(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('welcome'));
    }


    public function usersTables(Request $request)
    {
        $search = trim($request->get('search'));
        $users = DB::table('users')->select('id', 'nombre', 'apellido_Paterno', 'apellido_Materno','genero','domicilio','telefono','correo','created_at')
        ->where('nombre', 'LIKE','%'.$search.'%')
        ->orWhere('apellido_Paterno','LIKE','%'.$search.'%')
        ->orderBy('id','asc')
        ->paginate(10);
        
        return view('dashboard.consultasUsers', compact('users', 'search'));
    }
}