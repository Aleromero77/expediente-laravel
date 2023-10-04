<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class InicioController extends Controller
{
    public function contarRoles()
    {
        $totalUsuarios = User::count();
        $terapeuta = Role::where('name', 'terapeuta')->first();
        $recepcion = Role::where('name', 'recepcion')->first();
        $paciente = Role::where('name', 'paciente')->first();

        if ($terapeuta || $recepcion || $paciente) {
            $countTerapeutas = $terapeuta->users->count();
            $countRecepcion = $recepcion->users->count();
            $countPaciente = $paciente->users->count();
        } 
        return view('dashboard.inicio', compact('countTerapeutas','totalUsuarios','countRecepcion','countPaciente'));
    }
  
}