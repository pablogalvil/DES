<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mascota;
use App\Models\Cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    //Creamos una variable miembro model para acceder a BD
    protected $model = Mascota::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'especie' => fake()->randomElement(['Perro', 'Gato', 'Cobaya', 'Pescado']),
            'edad' => fake()->numberBetween(1, 20),
            'precio' => fake()->randomFloat(2, 0.5, 300.0),
            'cliente_id' => null
        ];
    }
}
