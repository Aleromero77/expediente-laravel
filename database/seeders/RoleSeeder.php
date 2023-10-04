<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sistemas = Role::create(['name' => 'sistemas']);
        $coordinacion = Role::create(['name' => 'coordinacion']);
        $recepcion = Role::create(['name' => 'recepcion']);
        $terapeuta = Role::create(['name' => 'terapeuta']);
        $paciente = Role::create(['name' => 'paciente']);

        

        // ||--------------------------PERMISOS VARIADOS --------------------------------------||
         $permission = Permission::create(['name' => 'users'])
                        ->syncRoles($sistemas,$recepcion);
        $permission = Permission::create(['name' => 'roles'])
                        ->syncRoles($sistemas,$recepcion);

        
        // ||--------------------------PERMISOS UNICOS --------------------------------------||
        
       // $permission = Permission::create(['name' => 'users'])->syncRoles($sistemas);
        

    }
}