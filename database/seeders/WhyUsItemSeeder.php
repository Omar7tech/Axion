<?php

namespace Database\Seeders;

use App\Models\WhyUsItem;
use Illuminate\Database\Seeder;

class WhyUsItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'Consistency Before Speed',
                'description' => 'The standard of rhythmic output over uncoordinated haste. We prioritize measured pace to ensure sustainable excellence.',
                'sort' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Systems Over Effort',
                'description' => 'Engineering workflows that outlive individual peak performance. We build scalable logic that ensures long-term reliability.',
                'sort' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Discipline in Execution',
                'description' => 'Unwavering adherence to established technical blueprints. Zero deviation from proven methodologies ensures consistent results.',
                'sort' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Embedded Quality',
                'description' => 'Quality as a primary structural element, not a final inspection. Built-in excellence at every stage of execution.',
                'sort' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Measured, Not Assumed',
                'description' => 'Decisions driven by hard metrics and verifiable logic. Data-verified outcomes eliminate guesswork.',
                'sort' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Controlled Growth',
                'description' => 'Expansion regulated by the stability of the core infrastructure. Strategic pace ensures sustainable development.',
                'sort' => 6,
                'is_active' => true,
            ],
            [
                'title' => 'Accountability',
                'description' => 'Transparent responsibility mapping across all operational tiers. Full ownership at every level of execution.',
                'sort' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Continuous Improvement',
                'description' => 'The systemic pursuit of the next percentage of efficiency. Perpetual beta mindset drives constant evolution.',
                'sort' => 8,
                'is_active' => true,
            ],
        ];

        foreach ($items as $item) {
            WhyUsItem::firstOrCreate(
                ['title' => $item['title']],
                $item
            );
        }
    }
}
