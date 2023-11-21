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
        $permission = Permission::create(['name' => 'users','description' =>'Control de usuarios'])
            ->syncRoles($sistemas, $recepcion);
        $permission = Permission::create(['name' => 'roles','description' =>'Control de Roles'])
            ->syncRoles($sistemas, $recepcion);

        $permission = Permission::create(['name' => 'rol','description' =>'Asignacion de Roles'])
            ->syncRoles($sistemas, $recepcion);

        // ||--------------------------PERMISOS UNICOS --------------------------------------||

        // $permission = Permission::create(['name' => 'users'])->syncRoles($sistemas);


    }
}