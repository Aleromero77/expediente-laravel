<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        /*   $search = trim($request->get('search'));
        $users = DB::table('users')->select('id', 'nombre', 'apellido_Paterno', 'apellido_Materno', 'genero', 'domicilio', 'telefono', 'correo', 'created_at')
            ->where('nombre', 'LIKE', '%' . $search . '%')
            ->orWhere('apellido_Paterno', 'LIKE', '%' . $search . '%')
            ->orWhere('correo', 'LIKE', '%' . $search . '%')
            ->orderBy('id', 'asc')
            ->paginate(10); */
        $users = User::all();
        return view('dashboard.consultasUsers', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
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
            'domicilio' => ['required', 'string', 'max:50'],
            'telefono' => ['required', 'regex:/^[0-9]{10}$/'],
            'correo' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'contrasena' => ['required'],
        ]);
        User::create([
            'nombre' => $request->nombre,
            'apellido_Paterno' => $request->apellido_Paterno,
            'apellido_Materno' => $request->apellido_Materno,
            'genero' => $request->genero,
            'domicilio' => $request->domicilio,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'contrasena' =>  Hash::make($request->contrasena)
        ]);

        return to_route('users.create')->with('info', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('auth.info', compact('user'));
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('auth.perfil', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        
        $input = $request->all();
        if(!empty($input['contrasena'])){
            $input['contrasena'] =  Hash::make($input['contrasena']);
        }else{
            $input = Arr::except($input, array('contrasena'));
        }

        $user = User::find($id);
        $user->update($input);
        return to_route('users.edit',$id)->with('info','se actualizo correctamente');
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

    public function obtenerTotalUsuarios()
    {
        $totalUsuarios = User::count();

        return view('dashboard.inicio', ['totalUsuarios' => $totalUsuarios]);
    }
}