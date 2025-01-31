<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MetodoPago>
 */
class MetodoPagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(), // Genera una palabra aleatoria
            'descripcion' => fake()->sentence(), // Genera una oración
            'imagen' => fake()->imageUrl(), // Genera una URL de imagen aleatoria
        ];
    }
}
