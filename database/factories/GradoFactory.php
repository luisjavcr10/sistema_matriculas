<?php

namespace Database\Factories;

use App\Models\Grado;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradoFactory extends Factory
{
    protected $model = Grado::class;

    public function definition()
    {
        return [
            'descripcion' => $this->faker->word(),  // Genera una palabra aleatoria
        ];
    }
}