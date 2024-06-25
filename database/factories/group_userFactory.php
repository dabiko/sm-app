<?php

namespace Database\Factories;

use App\Models\group_user;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class group_userFactory extends Factory
{
    protected $model = group_user::class;

    public function definition(): array
    {
        return [
            'status' => $this->faker->word(),
            'role' => $this->faker->word(),
            'token' => Str::random(10),
            'token_expire_date' => Carbon::now(),
            'token_used' => Carbon::now(),
            'user_id' => $this->faker->randomNumber(),
            'group_id' => $this->faker->randomNumber(),
            'created_by' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
