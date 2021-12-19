<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Idea;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'idea_id' => Idea::factory(),
            'body' => $this->faker->paragraph(5),
        ];
    }

    public function existing() {
        return $this->state(function(array $attributes) {
            return [
                'user_id' => $this->faker->numberBetween(1, 20),
            ];
        });
    }
}
