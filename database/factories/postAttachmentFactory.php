<?php

namespace Database\Factories;

use App\Models\postAttachment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class postAttachmentFactory extends Factory
{
    protected $model = postAttachment::class;

    public function definition(): array
    {
        return [
            'post_id' => $this->faker->randomNumber(),
            'name' => $this->faker->name(),
            'path' => $this->faker->word(),
            'mime' => $this->faker->word(),
            'created_by' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
