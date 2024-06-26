<?php

namespace Database\Factories;

use App\Models\postComment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class postCommentFactory extends Factory
{
    protected $model = postComment::class;

    public function definition(): array
    {
        return [
            'post_id' => $this->faker->randomNumber(),
            'comment' => $this->faker->word(),
            'user_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
