<?php

namespace Database\Factories;

use App\Models\Kit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_key' => fake()->unique()->bothify('CRS-???###'),
            'name' => fake()->sentence(4),
            'cover' => fake()->url(),
            'content' => fake()->paragraphs(3, true),
            'kit_id' => Kit::query()->inRandomOrder()->firstOrFail()->id,
        ];
    }
}
