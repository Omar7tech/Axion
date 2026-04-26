<?php

namespace Database\Factories;

use App\Models\Career;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Career>
 */
class CareerFactory extends Factory
{
    public function definition(): array
    {
        $titles = [
            'Export Operations Manager', 'Commodity Trade Analyst', 'Logistics Coordinator',
            'Grain Quality Inspector', 'Supply Chain Specialist', 'Port Operations Supervisor',
            'International Sales Representative', 'Documentation Officer', 'Freight Coordinator',
            'Procurement Specialist', 'Warehouse Supervisor', 'Compliance Officer',
            'Trade Finance Analyst', 'Customer Relations Manager', 'Market Research Analyst',
            'Agricultural Commodities Trader', 'Shipping & Customs Clerk', 'Operations Analyst',
            'Business Development Manager', 'Import/Export Coordinator',
        ];

        return [
            'title' => $this->faker->randomElement($titles),
            'description' => '<p>'.implode('</p><p>', $this->faker->paragraphs(rand(2, 4))).'</p>',
            'location' => $this->faker->randomElement([
                'New York, NY', 'Houston, TX', 'Chicago, IL', 'Miami, FL',
                'Los Angeles, CA', 'New Orleans, LA', 'Remote', null,
            ]),
            'type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract', 'Remote']),
            'is_active' => $this->faker->boolean(80),
            'sort' => $this->faker->numberBetween(0, 100),
        ];
    }
}
