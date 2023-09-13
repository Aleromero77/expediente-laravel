<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Unique;

class RegisteredUserController extends Controller
{
    

    public function store(Request $request)
    {
        
       $request->validate([
            'nombre'=>['required', 'string', 'max:50'],
            'apellido_Paterno' => ['required', 'string', 'max:50'],
            'apellido_Materno' => ['required', 'string', 'max:50'],
            'genero' => ['required', 'string', 'max:50'],
            'domicilio' => ['required', 'string', 'max:50'],
            'telefono' => ['required','regex:/^[0-9]{10}$/'],
            'correo' => ['required', 'string','email', 'max:50', 'unique:users'],
            'contrasena' => ['required'],

            
       ]);

       User::create([
        'nombre'=> $request->nombre,
        'apellido_Paterno' => $request->apellido_Paterno,
        'apellido_Materno' => $request->apellido_Materno,
        'genero' => $request->genero,
        'domicilio' => $request->domicilio,
        'telefono' => $request->telefono,
        'correo' => $request->correo,
        'contrasena' =>  Hash::make($request->contrasena)
       ]);

       return to_route('register')
       ->with('status','Se creo el usuario');
    }

}