<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //data 
            'active' => $this->faker->numberBetween(0,1),
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2,50,10000),
            'stock' => 'Yes',
            'description' => $this->faker->paragraph(),
            'photo' => 'https://img.freepik.com/vector-premium/accesorios-computadora-equipo-pc-placa-base-memoria-teclado-ilustracion-informatica-conjunto-aislado_121223-464.jpg?w=360',
        ];
    }
}
