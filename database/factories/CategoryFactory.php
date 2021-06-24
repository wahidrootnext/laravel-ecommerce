<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = $this->faker->unique()->randomElement(["Fashion", "Toy, Hobby & DIY", "Electronics & Media", "Food & Personal Care", "Furniture & Appliances"]);
        return [
            'name'      => $category,
            'slug'      => Str::slug($category),
            'featured'  => $this->faker->boolean(),
            'menu'      => 0,
        ];
    }
}
