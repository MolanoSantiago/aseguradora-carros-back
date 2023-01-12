<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Años
        \App\Models\Año::factory(21)->create();

        // Marcas
        \App\Models\Marca::factory()->create([
            'nombre' => 'Europeo'
        ]);

        \App\Models\Marca::factory()->create([
            'nombre' => 'Americano'
        ]);

        \App\Models\Marca::factory()->create([
            'nombre' => 'Asiatico'
        ]);


        // Planes
        \App\Models\Plan::factory()->create([
            'nombre' => 'Básico'
        ]);

        \App\Models\Plan::factory()->create([
            'nombre' => 'Completo'
        ]);
    }
}
