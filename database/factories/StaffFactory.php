<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //datos de la tabla
            'active' => $this->faker->numberBetween(0,1),
            'name' => $this->faker->name(),
            'tax_id' => $this->faker->numberBetween(100,500),
            'role' => 'Staff Role',
            'email' => $this->faker->email(),
            'password' => 'Password1234',
        ];
    }
}
