<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductoModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name, 
            'descripcion' => $this->faker->text(100),
            'precio' => $this->faker->randomFloat(2, 10, 1000),
            'expiracion' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'stock' => $this->faker->numberBetween(0, 100),
            'idProveedor' => $this->faker->numberBetween(1, 10),
        ];
    }
}
