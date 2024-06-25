<?php

namespace Database\Factories;

use App\Models\post_reaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class post_reactionFactory extends Factory
{
    protected $model = post_reaction::class;

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
