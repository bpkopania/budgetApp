<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Type;

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
    public function definition(): array
    {
        //$faker = FakerFactory::create();
        $userIds = User::pluck('id')->toArray();
        $typeIds = Type::pluck('id')->toArray();
        return [
            'name' => fake()->word(1, 5),
            'user_id' => fake()->randomElement($userIds),
        'type_id' => fake()->randomElement($typeIds),
        ];
    }
}
