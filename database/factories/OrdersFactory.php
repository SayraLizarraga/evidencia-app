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
            'active' => $this->faker->numberBetween(0,1),
            'customer_id' => $this->faker->numberBetween(1,20),
            'staff_id' => $this->faker->numberBetween(1,10),
            'total' => $this->faker->randomFloat(2,8000,70000),
            'subtotal' => $this->faker->randomFloat(2,5000,50000),
            'vat' => $this->faker->randomFloat(2,15,8000),
            'status' => 'Sent',
            'notes' => $this->faker->paragraph(),
            'datentime' => $this->faker->date(),
            'photo1' => 'https://picsum.photo/400/200',
            'photo2' => 'https://picsum.photo/400/200',
        ];
    }
}
