<?php

namespace Database\Factories;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'    => $this->faker->numberBetween(1, 50),
            'full'          => $this->faker->imageUrl(),
            'thumbnail'     => $this->faker->imageUrl(200, 200)
        ];
    }
}
