<?php

namespace Database\Factories;

use App\Models\Category;
use App\Services\Slugify;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cat = Category::inRandomOrder()->first();

        $name = $this->faker->catchPhrase();
        $slug = (new Slugify)->generate($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'description' => fake()->text(),
            'price' => rand(15, 500),
            'category_id' => $cat ? $cat->id : null,
        ];
    }
}
