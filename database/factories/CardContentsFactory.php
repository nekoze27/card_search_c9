<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CardContents>
 */
class CardContentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'card_no'=>fake()->randomDigit(1000),
            'name'=>fake()->name(10),
            'category'=>fake()->text(10),
            'hp'=>fake()->randomDigit(400),
            'weakness'=>fake()->text(5),
            'resistance'=>fake()->text(5),
            'escape_energy'=>fake()->randomDigit(5),
            'effect'=>fake()->text(200),
            'user_id'=>\App\Models\User::factory(),
        ];
    }
}
