<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(5);
        return [
            'title' => $title,
            'slug' => Str::slug($title,'-'),
            'description' => $this->faker->sentence(5),
            'category_id' => rand(1,5),
            'author_id' => 1,
            'content' => $this->faker->paragraphs(5,true),
            'image' => 'public/images/default-image.jpg',
        ];
    }
}
