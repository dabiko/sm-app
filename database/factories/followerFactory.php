<?php

namespace Database\Factories;

use App\Models\follower;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class followerFactory extends Factory
{
    protected $model = follower::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'follower_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
