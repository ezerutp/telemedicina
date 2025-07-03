<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuario administrador de prueba
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@telemedicina.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Usuario médico de prueba
        User::create([
            'name' => 'Dr. Juan Pérez',
            'email' => 'medico@telemedicina.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Usuario paciente de prueba
        User::create([
            'name' => 'María González',
            'email' => 'paciente@telemedicina.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Crear usuarios adicionales usando factory si existe
        if (class_exists('\Database\Factories\UserFactory')) {
            User::factory(10)->create();
        }
    }
}
