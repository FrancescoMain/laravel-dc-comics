<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fristName' => fake() -> firstName(),
            'lastName' => fake() -> lastName(),
            'dateOfBirth' => fake() -> date(),
            'heigth' => fake() -> boolean()
                                    ? fake() -> numberBetween(140, 220)
                                    : null,
        ];
    }
}
