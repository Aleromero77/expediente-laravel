<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(RoleSeeder::class);
        
        \App\Models\User::create([
            'nombre' => 'Dpto Sistemas',
            'apellido_Paterno' => 'Cesigue',
            'apellido_Materno' => 'Xalapa',
            'genero' => 'Masculino',
            'domicilio' => 'Estanzuela 10',
            'telefono' => '2281888888',
            'correo' => 'sistemas@example.com',
            'contrasena' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->assignRole('sistemas');

        \App\Models\User::factory(1000)->create([
            'contrasena' => Hash::make('123456789')
        ]);
    }
}