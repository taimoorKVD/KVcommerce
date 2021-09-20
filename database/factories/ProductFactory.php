<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => $this->faker->sentence(rand(5, 7)),
            'description' => $this->faker->sentence(rand(50, 300), true),
            'price' => $this->faker->numberBetween(1000, 5000),
            'image' => basename($this->faker->image(storage_path('app/public/product'))),
        ];
    }
}
