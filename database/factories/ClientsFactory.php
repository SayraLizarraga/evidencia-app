<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clients>
 */
class ClientsFactory extends Factory
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
            'uuid'=> $this->faker->uuid(),
            'name' => $this->faker->name(),
            'email' => 'test@gmail.com',
            'password' => 'Password1234',
            'phone'=> $this->faker->phoneNumber(),
            'address'=> $this->faker->address(),
            'tax_id' => $this->faker->numberBetween(0,99999999999999999999999999999999999),
            'active' => $this->faker->numberBetween(0,1),
        ];
    }
}
