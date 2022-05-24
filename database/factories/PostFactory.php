<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    // CLASE QUE VAMOS A SEMBRAR
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(),
            'slug'=> $this->faker->slug(),
            'body'=> $this->faker->paragraph(50),
        ];
    }
}
