<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    public function run()
    {
        Estudiante::factory()->count(50)->create();  // Crea 50 estudiantes aleatorios
    }
}