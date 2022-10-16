<?php

namespace Database\Factories;

use App\Services\Slugify;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->catchPhrase();
        $slug = (new Slugify)->generate($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'parent_id' => rand(0, 1) ? rand(1, 3) : null,
        ];
    }
}
