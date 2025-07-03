<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['nombre' => 'admin', 'descripcion' => 'Administrador con acceso total'],
            ['nombre' => 'doctor', 'descripcion' => 'Médico con acceso a pacientes y consultas'],
            ['nombre' => 'paciente', 'descripcion' => 'Usuario paciente con acceso a su información'],
            ['nombre' => 'recepcionista', 'descripcion' => 'Recepcionista con acceso a citas y pacientes'],
            ['nombre' => 'enfermero', 'descripcion' => 'Enfermero con acceso a pacientes y consultas'],
            ['nombre' => 'laboratorio', 'descripcion' => 'Personal de laboratorio con acceso a resultados de pruebas'],
            ['nombre' => 'administrativo', 'descripcion' => 'Personal administrativo con acceso a gestión de usuarios y roles'],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(
                ['nombre' => $role['nombre']],   // Campos para buscar
                $role                             // Campos para crear si no existe
            );
        }
    }
}
