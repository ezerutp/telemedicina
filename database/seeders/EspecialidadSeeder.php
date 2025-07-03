<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especialidad;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especialidades = [
            ['nombre' => 'Cardiología', 'descripcion' => 'Especialidad médica que se ocupa del corazón y el sistema circulatorio.'],
            ['nombre' => 'Dermatología', 'descripcion' => 'Especialidad médica que se ocupa de la piel y sus enfermedades.'],
            ['nombre' => 'Pediatría', 'descripcion' => 'Especialidad médica que se ocupa de la salud de los niños y adolescentes.'],
            ['nombre' => 'Ginecología', 'descripcion' => 'Especialidad médica que se ocupa de la salud de la mujer y el sistema reproductivo.'],
            ['nombre' => 'Psiquiatría', 'descripcion' => 'Especialidad médica que se ocupa de la salud mental y los trastornos psicológicos.'],
            ['nombre' => 'Oftalmología', 'descripcion' => 'Especialidad médica que se ocupa de las enfermedades de los ojos.'],
            ['nombre' => 'Otorrinolaringología', 'descripcion' => 'Especialidad médica que se ocupa de las enfermedades del oído, nariz y garganta.'],
            ['nombre' => 'Neurología', 'descripcion' => 'Especialidad médica que se ocupa de las enfermedades del sistema nervioso.'],
            ['nombre' => 'Endocrinología', 'descripcion' => 'Especialidad médica que se ocupa de las glándulas y las hormonas.'],
            ['nombre' => 'Gastroenterología', 'descripcion' => 'Especialidad médica que se ocupa del aparato digestivo y sus enfermedades.'],
            ['nombre' => 'Nefrología', 'descripcion' => 'Especialidad médica que se ocupa de las enfermedades del riñón.'],
            ['nombre' => 'Oncología', 'descripcion' => 'Especialidad médica que se ocupa del diagnóstico y tratamiento del cáncer.'],
            ['nombre' => 'Traumatología', 'descripcion' => 'Especialidad médica que se ocupa de las lesiones del aparato locomotor.'],
            ['nombre' => 'Reumatología', 'descripcion' => 'Especialidad médica que se ocupa de las enfermedades reumáticas y autoinmunes.'],
            ['nombre' => 'Neumología', 'descripcion' => 'Especialidad médica que se ocupa de las enfermedades del aparato respiratorio.'],
        ];

        foreach ($especialidades as $especialidad) {
            Especialidad::firstOrCreate(
                ['nombre' => $especialidad['nombre']],   // Campos para buscar
                $especialidad                             // Campos para crear si no existe
            );
        }
    }
}
