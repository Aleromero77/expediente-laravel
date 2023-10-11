<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;


class RolController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:rol');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
        return view('users.rol.edit', compact('user', 'roles', 'rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'roles' => 'required|exists:roles,name',
        ]);
        $user->syncRoles([$request->input('roles')]);
        return redirect()->route('rol.edit', $user->id)->with('success', 'Rol actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}