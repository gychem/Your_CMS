<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {



        
        $randomNumber = rand(0, 99999);
          
        return [
            'category_id' => 1,
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'user_id' => 1,
            'image' => 'https://source.unsplash.com/random?sig='. $randomNumber
        ];
    }


}
