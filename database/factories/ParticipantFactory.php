<?php

namespace Database\Factories;

use App\Models\participant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'nom' => $this->faker->sentence(1, true),
        'prenom' => $this->faker->sentence(1, true),
        'numero' => rand(1, 10),
        'email' => $this->faker->sentence(1, true),
        ];
    }
}
