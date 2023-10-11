<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{

    public function index()
    {
        return view('roles.index');
    }


    public function create()
    {
        $permissions = Permission::all();
        
        return view('roles.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $role= Role::create($request->all());
        $role->permissions()->sync($request->permissions); 

        return redirect()->route('roles.index');
    }


    public function show($id)
    {
       
    }

    public function edit($id)
    {
       
    }


    public function update(Request $request, $id)
    {
      }

      public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'El rol se elimino con éxito');
        
    }

      public function dataRolesTable()
      {
          $roles = Role::all();
          return datatables()
              ->collection($roles)
              ->addColumn('btn', 'roles.actions')
              ->rawColumns(['btn'])
              ->toJson();
      }
}