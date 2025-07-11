<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Seeders
        $this->call(DiagnosticoSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(TipoNotificacionSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(EstadoCitaSeeder::class);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
