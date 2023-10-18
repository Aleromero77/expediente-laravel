<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:users');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:50'],
            'apellido_Paterno' => ['required', 'string', 'max:50'],
            'apellido_Materno' => ['required', 'string', 'max:50'],
            'genero' => ['required', 'string', 'max:50'],
            'domicilio' => ['required', 'string', 'max:100'],
            'telefono' => ['required', 'regex:/^[0-9]{10}$/'],
            'correo' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'contrasena' => ['required'],
        ]);
        $user= User::create([
            'nombre' => $request->nombre,
            'apellido_Paterno' => $request->apellido_Paterno,
            'apellido_Materno' => $request->apellido_Materno,
            'genero' => $request->genero,
            'domicilio' => $request->domicilio,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'contrasena' =>  Hash::make($request->contrasena)
        ]);

        $user->assignRole('paciente');

        $paciente = new Paciente();

        $user->paciente()->save($paciente);

        return to_route('users.create')->with('info', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //     if (Auth::user()->hasRole('sistemas')) {
        //         $roles = Role::skip(1)->take(4)->get();
        //     }else if (Auth::user()->hasRole('recepcion')) {
        //         $roles = Role::skip(2)->take(4)->get();
        //     }else{
        //         $roles = Role::skip(3)->take(4)->get();
        //     }


        //     $user = User::findOrFail($id);
        //     $rol = $user->getRoleNames()->first();

        //     return view('auth.info', compact('user', 'roles', 'rol'));
    }

    public function roles(Request $request, User  $user)
    {

        // $currentRoles = $user->getRoleNames()->first();
        // $newRole = Role::where('name', $request->roles)->first();

        // if (Auth::user()->hasRole('sistemas') || Auth::user()->hasRole('recepcion') ) { // you can pass an id or slug
        //     if ($user->hasRole($request->roles)) {
        //         return redirect()->back()->with('info', 'El usuario ya tiene el rol.');
        //     }
        //     if (!empty($currentRoles)) {
        //         $user->removeRole($currentRoles[0]);
        //     } 

        //     if ($newRole) {
        //         $user->assignRole($newRole);
        //         return redirect()->back()->with('success', 'Rol actualizado con éxito.');
        //     } 
        // }
        // else{
        //     return redirect()->back()->with('error', 'El nuevo rol no existe.');
        // }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $rol = $user->getRoleNames()->first();
        return view('users.perfil', compact('user', 'rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:50'],
            'apellido_Paterno' => ['required', 'string', 'max:50'],
            'apellido_Materno' => ['required', 'string', 'max:50'],
            'genero' => ['required', 'string', 'max:50'],
            'domicilio' => ['required', 'string', 'max:100'],
            'telefono' => ['required', 'regex:/^[0-9]{10}$/'],
            'correo' => ['required'],
        ]);


        $input = $request->all();
        if (!empty($input['contrasena'])) {
            $input['contrasena'] =  Hash::make($input['contrasena']);
        } else {
            $input = Arr::except($input, array('contrasena'));
        }

        $user = User::find($id);
        $user->update($input);
        return to_route('users.edit', $id)->with('info', 'se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function usersTables()
    {
        $users = User::all();
        return datatables()
            ->collection($users)
            ->addColumn('btn', 'dashboard.actions')
            ->rawColumns(['btn'])
            ->toJson();
    }
}