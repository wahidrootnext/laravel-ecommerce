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
            'brand'     => $this->faker->lexify("brand-???"),
            'sku'       => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'name'      => $name,
            'slug'      => Str::slug($name),
            'price'     => $this->faker->randomFloat(2, 10, 9999),
            'quantity'  => $this->faker->randomNumber(),
            'status'    => $this->faker->boolean(90),
            'featured'  => $this->faker->boolean(),
            'shop_id'   => $this->faker->randomDigitNotZero(),
        ];
    }
}
