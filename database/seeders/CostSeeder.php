<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('costs')->insert([
            ['type' => 'Flight', 'name' => 'Lufthansa', 'cost_tab_id' => 1, 'price' => '225.00', 'currency' => 'EUR', 'city_id' => 1, 'destination_id' => 1],
            ['type' => 'Train', 'name' => 'DB', 'cost_tab_id' => 1, 'price' => '5.90', 'currency' => 'EUR', 'city_id' => 1, 'destination_id' => 1],
            ['type' => 'Hostel', 'name' => 'Hostel One', 'cost_tab_id' => 2, 'price' => '25.90', 'currency' => 'EUR', 'city_id' => 1, 'destination_id' => 1],
            ['type' => 'Food', 'name' => 'Restaurant', 'cost_tab_id' => 3, 'price' => '20.0', 'currency' => 'EUR', 'city_id' => 1, 'destination_id' => 1],
            ['type' => 'Souvenir', 'name' => 'random', 'cost_tab_id' => 4, 'price' => '10.0', 'currency' => 'EUR', 'city_id' => 1, 'destination_id' => 1],
        ]);
    }
}
