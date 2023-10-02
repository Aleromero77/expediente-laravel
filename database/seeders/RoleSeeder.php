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
        $admin = Role::create(['name' => 'admin']);
        $sistemas = Role::create(['name' => 'sistemas']);
        $recepcion = Role::create(['name' => 'recepcion']);
        $terapeuta = Role::create(['name' => 'terapeuta']);
        $paciente = Role::create(['name' => 'paciente']);

        

        // ||--------------------------RUTAS PUBLICAS --------------------------------------||
        $permission = Permission::create(['name' => 'users.index'])
        ->syncRoles($sistemas,$recepcion);

        
        // ||--------------------------RUTAS PRIVADAS --------------------------------------||
        
        $permission = Permission::create(['name' => 'users.store'])->syncRoles($sistemas);
        $permission = Permission::create(['name' => 'users.create'])->syncRoles($sistemas);
        $permission = Permission::create(['name' => 'users.update'])->syncRoles($sistemas);
        $permission = Permission::create(['name' => 'users.edit'])->syncRoles($sistemas);
        

    }
}