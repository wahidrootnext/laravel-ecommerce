<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->lexify("Product-?????");
        return [
            'name'          => $name,
            'slug'          => Str::slug($name),
            'sku'           => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'brand'         => $this->faker->lexify("brand-???"),
            'description'   => $this->faker->text(300),
            'quantity'      => $this->faker->randomNumber(4),
            'weight'        => $this->faker->randomFloat(2, 0, 1000),
            'price'         => $this->faker->randomFloat(2, 10, 9999),
            'sale_price'    => $this->faker->randomFloat(2, 10, 1000),
            'status'        => $this->faker->boolean(90),
            'featured'      => $this->faker->boolean(),
            'rating'        => $this->faker->randomFloat(1, 0, 5),
            'shop_id'       => $this->faker->randomDigitNotZero(),
        ];
    }
}
