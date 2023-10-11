<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class PerfilController extends Controller
{
    public function edit()
    {
        $user = User::findOrFail(Auth::user()->id);
        $rol = $user->getRoleNames()->first();
        if (empty($user)) {
            return redirect()->back()->with('error', 'No tienes permiso');
        }
        return view('auth.perfil', compact('user', 'rol'));
    }

    public function update(Request $request)
    {
        $usuario = User::findOrFail(Auth::User()->id);
        $request->validate([
            'nombre' => ['required', 'string', 'max:50'],
            'apellido_Paterno' => ['required', 'string', 'max:50'],
            'apellido_Materno' => ['required', 'string', 'max:50'],
            'genero' => ['required', 'string', 'max:50'],
            'domicilio' => ['required', 'string', 'max:50'],
            'telefono' => ['required', 'regex:/^[0-9]{10}$/'],
            'correo' => ['required'],
        ]);


        $input = $request->all();
        if (!empty($input['contrasena'])) {
            $input['contrasena'] =  Hash::make($input['contrasena']);
        } else {
            $input = Arr::except($input, array('contrasena'));
        }
        
        $usuario->update($input);
        return to_route('perfil.edit',Auth::User()->id)->with('info', 'se actualizo correctamente');
    }
}