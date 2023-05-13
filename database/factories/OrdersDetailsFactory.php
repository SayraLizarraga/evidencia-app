<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrdersDetails>
 */
class OrdersDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //data 
            //'active' => $this->faker->numberBetween(0,1),
            'order_id' => $this->faker->numberBetween(1,12),
            'product_id' => $this->faker->numberBetween(1,200),
            'quantity' => $this->faker->numberBetween(1,500),
            'subtotal' => $this->faker->randomFloat(2,5000,50000),
        ];
    }
}
