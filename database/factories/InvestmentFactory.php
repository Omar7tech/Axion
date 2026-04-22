<?php

namespace Database\Factories;

use App\Models\Investment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Investment>
 */
class InvestmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sort' => fake()->numberBetween(0, 100),
            'project_name' => fake()->company().' '.fake()->words(2, true).' Project',
            'project_description' => fake()->sentence(12),
            'project_content' => '<h2>'.fake()->sentence().'</h2><p>'.fake()->paragraph(5).'</p>',
            'investment_amount' => fake()->numberBetween(100000, 50000000),
            'is_active' => fake()->boolean(80),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'slug' => fake()->slug()
        ];
    }
}
