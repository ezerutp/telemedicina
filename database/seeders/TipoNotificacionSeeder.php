<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoNotificacion;

class TipoNotificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = [
            ['nombre' => 'Email', 'descripcion' => 'Notificación enviada por correo electrónico.'],
            ['nombre' => 'SMS', 'descripcion' => 'Notificación enviada por mensaje de texto.'],
            ['nombre' => 'Push', 'descripcion' => 'Notificación enviada a través de una aplicación móvil.'],
        ];

        foreach ($tipos as $tipo) {
            TipoNotificacion::firstOrCreate(
                ['nombre' => $tipo['nombre']],   // Campos para buscar
                $tipo                             // Campos para crear si no existe
            );
        }
    }
}
