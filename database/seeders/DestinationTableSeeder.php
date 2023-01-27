<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DestinationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('destinations')->insert([
            [
                'name' => 'South America',
                'slug' => 'south-america',
                'date_ini' => Carbon::parse('01-05-2023'),
                'date_end' => Carbon::parse('20-05-2023'),
                'user_id' => '1'
            ],
            [
                'name' => 'Japan',
                'slug' => 'japan',
                'date_ini' => Carbon::parse('10-09-2023'),
                'date_end' => Carbon::parse('30-09-2023'),
                'user_id' => '1'
            ],
        ]);

    }
}
