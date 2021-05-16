<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
    	return [
            'content' => $this->faker->text,
            'title' => $this->faker->title,
            'isOnline' => $this->faker->boolean
    	];
    }
}
