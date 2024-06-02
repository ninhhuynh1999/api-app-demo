<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();
        
        return [
            'name' => 'Store' . fake()->company(),
            'description' => fake()->paragraph(2), // Generate a 2-paragraph description
            'user_id' => $user->id,
        ];
    }
}
