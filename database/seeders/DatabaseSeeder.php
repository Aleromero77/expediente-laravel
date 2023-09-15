<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        \App\Models\User::factory()->create([
            'nombre' => 'Dpto Sistemas',
            'apellido_Paterno' => 'Cesigue',
            'apellido_Materno' => 'Xalapa',
            'genero' => 'Masculino',
            'domicilio' => 'Estanzuela 10',
            'telefono' => '2281888888',
            'correo' => 'sistemas@example.com',
            'contrasena' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        
        \App\Models\User::factory(50)->create();
    }
}