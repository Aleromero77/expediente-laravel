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
        $superadmin = Role::create(['name' => 'admin']);
        $sistemas = Role::create(['name' => 'sistemas']);
        $recepcion = Role::create(['name' => 'recepcion']);
        $terapeuta = Role::create(['name' => 'terapeuta']);
        $paciente = Role::create(['name' => 'paciente']);
        
        $permission = Permission::create(['name' => 'register'])->syncRoles($sistemas);
        $permission = Permission::create(['name' => 'consultasUsers'])->syncRoles($sistemas,$recepcion);

    }
}