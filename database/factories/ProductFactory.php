<?php

namespace Database\Factories;

use App\Models\Store;
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
    public function definition(): array
    {
        $store = Store::all()->random();
        return [
            'name' => 'Product' . fake()->company(),
            'description' => fake()->paragraph(2), // Generate a 2-paragraph description
            'amount' => fake()->randomNumber(4),
            'price' => fake()->randomFloat(2, 1, 1_000_000),
            'store_id' => $store->id,
        ];
    }
}
