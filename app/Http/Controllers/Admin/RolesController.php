<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;


class RolesController extends Controller
{

    public function index()
    {
        return view('roles.index');
    }


    public function create()
    {
        return view('roles.create');
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
       
    }


    public function update(Request $request, $id)
    {
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