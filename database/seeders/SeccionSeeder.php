<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seccion;
use App\Models\Grado;

class SeccionSeeder extends Seeder
{
    public function run()
    {
        // Crear un grado
        $grado = Grado::factory()->create();

        // Crear 5 secciones que pertenezcan al mismo grado
        Seccion::factory()->count(5)->create([
            'id_grado' => $grado->id_grado
        ]);
    }
}