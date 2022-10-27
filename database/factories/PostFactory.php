<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => $this->faker->words(1, true),
            'username' => $this->faker->words(1, true),
            'password' => $this->faker->password(minLength: 8),
            'confirmPassword' => $this->faker->password(minLength: 8),
        ];
    }

}
