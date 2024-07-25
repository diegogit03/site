<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence('8'),
            'content' => fake()->text(1000),
            'thumb_filename' => '01J3K0CAS712RZNX3QV9C5ZPDR.jpg',
            'status' => 'published'
        ];
    }
}
