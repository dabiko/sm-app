<?php

namespace Database\Factories;

use App\Models\post_comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class post_commentFactory extends Factory
{
    protected $model = post_comment::class;

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
