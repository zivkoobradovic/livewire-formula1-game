<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GamePlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'result' => fake()->time(),
            'code' => Str::random(8),
            'slug' => Str::random(12),
            'status' => 'finished',
            'start_time' => fake()->time(),
            'end_time' => fake()->time(),
        ];
    }
}
