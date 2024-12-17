<?php

namespace Database\Factories;

use App\Models\Seccion;
use App\Models\Grado;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeccionFactory extends Factory
{
    protected $model = Seccion::class;

    public function definition()
    {
        return [
            'aforo' => $this->faker->numberBetween(20, 40),  // Genera un número aleatorio entre 20 y 40
            'id_grado' => Grado::factory(),  // Crea un grado aleatorio y lo asocia
        ];
    }
}
