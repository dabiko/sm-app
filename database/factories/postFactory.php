<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class postFactory extends Factory
{
    protected $model = post::class;

    public function definition(): array
    {
        return [
            'body' => $this->faker->word(),
            'user_id' => $this->faker->randomNumber(),
            'group_id' => $this->faker->randomNumber(),
            'deleted_by' => $this->faker->randomNumber(),
            'deleted_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
