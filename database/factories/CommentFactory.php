<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'text' => $this->faker->text,
            'user_id' => $this->faker->numberBetween(1, 2),
            'product_id' => $this->faker->numberBetween(1, 2),
            'programme_id' => $this->faker->numberBetween(1, 2),
            'user_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
