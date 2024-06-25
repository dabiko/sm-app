<?php

namespace Database\Factories;

use App\Models\group;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class groupFactory extends Factory
{
    protected $model = group::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'cover_path' => $this->faker->word(),
            'thumbnail_path' => $this->faker->word(),
            'auto_approval' => $this->faker->boolean(),
            'about' => $this->faker->word(),
            'user_id' => $this->faker->randomNumber(),
            'deleted_at' => Carbon::now(),
            'deleted_by' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
