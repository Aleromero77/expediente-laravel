<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:roles');
    }

    public function index()
    {
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
       
    }

    public function edit($id)
    {
        // if (Auth::user()->hasRole('sistemas')) {
        //     $roles = Role::skip(1)->take(4)->get();
        // } else if (Auth::user()->hasRole('recepcion')) {
        //     $roles = Role::skip(3)->take(4)->get();
        // } else {
        //     $roles = Role::skip(4)->take(4)->get();
        // }
        $user = User::findOrFail($id);
        $roles = Role::all();
        $rol = $user->getRoleNames()->first();
        return view('roles.edit', compact('user', 'roles', 'rol'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'roles' => 'required|exists:roles,name', 
        ]);
        $user->syncRoles([$request->input('roles')]);
        return redirect()->route('roles.edit', $user->id)->with('success', 'Rol actualizado con éxito');
    }
}