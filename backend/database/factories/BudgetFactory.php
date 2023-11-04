<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //$faker = FakerFactory::create();
        $isPeriodic = fake()->boolean();
        //$user_id = User::inRandomOrder()->first()->id; // Get a random user_id
        //$category_id = Category::where('user_id', $user_id)->inRandomOrder()->first()->id;

        while ($category_id === null) {
            $user_id = User::inRandomOrder()->first()->id; // Get a random user_id
            $category = Category::where('user_id', $user_id)->inRandomOrder()->first();
            if ($category) {
                $category_id = $category->id;
            }
        }

        return [
            'user_id' => $user_id,
            'category_id' => $category_id,
            'InOut' => fake()->boolean(), // Generates true or false for 'InOut'
            'Value' => fake()->randomFloat(2, 0, 6000), // Generates a random number for 'Value'
            'isPeriodic' => $isPeriodic, // Generates true or false for 'isPeriodic'

            // 'period' is generated only when 'isPeriodic' is true
            'period' => $isPeriodic ? fake()->numberBetween(0, 366) : null,

            'Name' => fake()->word(), // Generates a random word for 'Name'
        ];
    }
}
