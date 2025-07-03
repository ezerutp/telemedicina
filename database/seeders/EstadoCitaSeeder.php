<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstadoCita;

class EstadoCitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            ['nombre' => 'Pendiente', 'descripcion' => 'Cita pendiente de confirmación.'],
            ['nombre' => 'Confirmada', 'descripcion' => 'Cita confirmada por el paciente.'],
            ['nombre' => 'Cancelada', 'descripcion' => 'Cita cancelada por el paciente.'],
            ['nombre' => 'Completada', 'descripcion' => 'Cita completada.'],
        ];

        foreach ($estados as $estado) {
            EstadoCita::firstOrCreate(
                ['nombre' => $estado['nombre']],   // Campos para buscar
                $estado                             // Campos para crear si no existe
            );
        }
    }
}
