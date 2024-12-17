<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grado;

class GradoSeeder extends Seeder
{
    public function run()
    {
        Grado::factory()->count(5)->create();  // Crea 5 grados aleatorios
    }
}
