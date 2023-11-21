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
            'contrasena' => Hash::make('123456789'),
            'remember_token' => Str::random(10),
        ])->assignRole('sistemas');


        $correosUnicos = [];

        \App\Models\User::factory(200)->create()
            ->each(function ($user) use (&$correosUnicos) {
                do {
                    $correo = fake()->unique()->email();
                } while (in_array($correo, $correosUnicos));

                $user->update(['correo' => $correo]);
                $correosUnicos[] = $correo;

                $user->update(['contrasena' => Hash::make('123456789')]);
                $user->assignRole('paciente');
            });
    }
}