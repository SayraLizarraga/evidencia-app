<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
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
            //'active' => $this->faker->numberBetween(0,1),
            'customer_id' => $this->faker->numberBetween(1,20),
            'staff_id' => $this->faker->numberBetween(1,10),
            'total' => $this->faker->randomFloat(2,8000,70000),
            'subtotal' => $this->faker->randomFloat(2,5000,50000),
            'tax' => $this->faker->randomFloat(2,15,8000),
            'status' => $this->faker->numberBetween(0,4),
            //'notes' => $this->faker->paragraph(),
            //'datentime' => $this->faker->date(),
            //'photo1' => 'https://img.freepik.com/vector-premium/accesorios-computadora-equipo-pc-placa-base-memoria-teclado-ilustracion-informatica-conjunto-aislado_121223-464.jpg?w=360',
            //'photo2' => 'https://jupiterpdx.com/wp-content/uploads/2021/11/Persona-recibiendo-paquete.jpg',
        ];
    }
}
