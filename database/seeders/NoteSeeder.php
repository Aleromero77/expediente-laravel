<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('users')->insert([
            'nombre' => 'Dpto de Sistemas',
            'apellido_Paterno' => fake()->lastName(),
            'apellido_Materno' => fake()->lastName(),
            'genero' => 'Masculino',
            'domicilio' => fake()->address(),
            'telefono' => fake()->phoneNumber(),
            'correo' => 'sistemas@example.com',
            'contrasena' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

        ]);
    }
}