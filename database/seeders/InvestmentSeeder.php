<?php

namespace Database\Seeders;

use App\Models\Investment;
use Illuminate\Database\Seeder;

class InvestmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Investment::factory()->count(100)->create();
    }
}
