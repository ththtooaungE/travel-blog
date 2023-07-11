<?php

namespace Database\Factories;

use App\Models\Distination;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

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
        $title = $this->faker->sentence();
        return [
            'title'=>$title,
            'slug'=>Str::slug($title),
            'user_id'=>User::factory(),
            'distination_id' => Distination::factory(),
            'body'=>$this->faker->paragraph(),
            'image'=>$this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
