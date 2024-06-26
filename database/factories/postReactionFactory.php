<?php

namespace Database\Factories;

use App\Models\postReaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class postReactionFactory extends Factory
{
    protected $model = postReaction::class;

    public function definition(): array
    {
        return [
            'post_id' => $this->faker->randomNumber(),
            'type' => $this->faker->word(),
            'user_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
