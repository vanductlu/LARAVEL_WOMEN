<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Woman>
 */
class WomanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'field_of_work' => $this->faker->jobTitle,
            'image_url' => $this->faker->imageUrl,
            'birth_date' => $this->faker->date,
        ];
    }
}
