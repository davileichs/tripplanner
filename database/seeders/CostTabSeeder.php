<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CostTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cost_tabs')->insert([
            ['name' => 'Transport', 'icon' => 'fa-truck-plane'],
            ['name' => 'Accommodation', 'icon' => 'fa-hotel'],
            ['name' => 'Food/Drinks', 'icon' => 'fa-utensils'],
            ['name' => 'Extra', 'icon' => 'fa-money-bill-wave']
        ]);
    }
}
