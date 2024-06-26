<?php

namespace Database\Factories;

use App\Models\comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class commentFactory extends Factory
{
    protected $model = comment::class;

    public function definition(): array
    {
        return [
            'parent_id' => $this->faker->word(),
        ];
    }
}
