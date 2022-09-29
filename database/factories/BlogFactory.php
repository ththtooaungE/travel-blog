<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name(),
            'slug'=>$this->faker->unique()->slug(),
            'user_id'=>User::factory(),
            'body'=>$this->faker->paragraph(),
            'image'=>$this->faker->paragraph()
        ];
    }
}
