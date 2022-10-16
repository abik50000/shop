<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Services\Slugify;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Clothing' => [
                'Woman Shoes' => [
                    'Golfers',
                    'Sneakers'
                ],
                'Men\'s Shirts' => [
                    'T-shirts',
                    'Shirts'
                ]
            ],
            'Handy' => [
                'Smartphones' => [
                    'Iphones',
                    'Android phones'
                ],
                'Smartwatches' => [
                    'Wow watches'
                ]
            ]
        ];

        foreach ($data as $category => $subCategories)
        {
            $id = Category::create([
                'name' => $category,
                'slug' => (new Slugify)->generate($category)
            ])->id;

            foreach ($subCategories as $secondCat => $secondCategory) {
                $second_id = Category::create([
                    'parent_id' => $id,
                    'name'      => $secondCat,
                    'slug'      => (new Slugify)->generate($secondCat)
                ])->id;

                foreach ($secondCategory as $thirdCat) {
                    Category::create([
                        'parent_id' => $second_id,
                        'name'      => $thirdCat,
                        'slug'      => (new Slugify)->generate($thirdCat)
                    ]);
                }

            }
        }
    }
}
