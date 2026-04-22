<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $businesses = [
            [
                'title' => 'Agriculture Expansion',
                'slug' => 'agriculture-expansion',
                'subtitle' => 'Feeding the world through smart farming.',
                'description' => 'Modern farming solutions enhancing productivity.',
                'content' => 'Modern farming solutions enhancing productivity through innovative agricultural practices and technology.',
                'link' => '#',
                'sort' => 1,
                'is_active' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Technology & AI',
                'slug' => 'technology-ai',
                'subtitle' => 'Engineering tomorrow\'s intelligence.',
                'description' => 'Driving innovation through automation and AI.',
                'content' => 'Driving innovation through automation and AI to create smarter solutions for the future.',
                'link' => '#',
                'sort' => 2,
                'is_active' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Construction & Real Estate',
                'slug' => 'construction-real-estate',
                'subtitle' => 'Building the infrastructure of a world.',
                'description' => 'Infrastructure growth and industrial execution.',
                'content' => 'Infrastructure growth and industrial execution to build sustainable communities.',
                'link' => '#',
                'sort' => 3,
                'is_active' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Logistics & Supply Chain',
                'slug' => 'logistics-supply-chain',
                'subtitle' => 'Moving goods, connecting continents.',
                'description' => 'Reliable transportation and distribution.',
                'content' => 'Reliable transportation and distribution networks connecting global markets.',
                'link' => '#',
                'sort' => 4,
                'is_active' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Finance & Investment',
                'slug' => 'finance-investment',
                'subtitle' => 'Global demand meets trading.',
                'description' => 'Efficient exchange of goods and services.',
                'content' => 'Efficient exchange of goods and services through strategic financial solutions.',
                'link' => '#',
                'sort' => 5,
                'is_active' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Equipment & Automotive',
                'slug' => 'equipment-automotive',
                'subtitle' => 'Driving next-generation vehicles.',
                'description' => 'Reliability, durability, and performance.',
                'content' => 'Reliability, durability, and performance in automotive and equipment solutions.',
                'link' => '#',
                'sort' => 6,
                'is_active' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Medical & Pharma',
                'slug' => 'medical-pharma',
                'subtitle' => 'Advancing health through science.',
                'description' => 'Safe, effective, and high-quality products.',
                'content' => 'Safe, effective, and high-quality products advancing healthcare globally.',
                'link' => '#',
                'sort' => 7,
                'is_active' => true,
                'is_published' => true,
            ],
            [
                'title' => 'AXION Logistics',
                'slug' => 'axion-logistics',
                'subtitle' => 'Reliability at global speed.',
                'description' => 'Transportation and operational excellence.',
                'content' => 'Transportation and operational excellence delivering logistics solutions worldwide.',
                'link' => '#',
                'sort' => 8,
                'is_active' => true,
                'is_published' => true,
            ],
            [
                'title' => 'AXION Energy',
                'slug' => 'axion-energy',
                'subtitle' => 'Your energy market gateway.',
                'description' => 'Reliable sourcing and resource trading.',
                'content' => 'Reliable sourcing and resource trading in the global energy market.',
                'link' => '#',
                'sort' => 9,
                'is_active' => true,
                'is_published' => true,
            ],
            [
                'title' => 'AXION Trade Finance',
                'slug' => 'axion-trade-finance',
                'subtitle' => 'Powering world markets.',
                'description' => 'Efficiency across global commercial networks.',
                'content' => 'Efficiency across global commercial networks through trade finance solutions.',
                'link' => '#',
                'sort' => 10,
                'is_active' => true,
                'is_published' => true,
            ],
            [
                'title' => 'AXION Digital',
                'slug' => 'axion-digital',
                'subtitle' => 'The digital economy gateway.',
                'description' => 'Cutting-edge digital platform solutions.',
                'content' => 'Cutting-edge digital platform solutions for the modern digital economy.',
                'link' => '#',
                'sort' => 11,
                'is_active' => true,
                'is_published' => true,
            ],
        ];

        foreach ($businesses as $business) {
            Business::firstOrCreate(
                ['slug' => $business['slug']],
                $business
            );
        }
    }
}
