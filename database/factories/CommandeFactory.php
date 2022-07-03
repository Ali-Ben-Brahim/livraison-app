<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{

    public function definition()
    {
        return [
            'nom' => fake()->name(),
            'adresse' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'prix' => fake()->numberBetween(10,1000), 
            
        ];
    }
}
