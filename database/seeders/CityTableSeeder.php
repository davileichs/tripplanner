<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'name' => 'Buenos Aires',
                'date_ini' => Carbon::parse('01-05-2023'),
                'date_end' => Carbon::parse('3-05-2023'),
                'destination_id' => 1
            ],
            [
                'name' => 'El calafate',
                'date_ini' => Carbon::parse('3-05-2023'),
                'date_end' => Carbon::parse('7-05-2023'),
                'destination_id' => 1
            ],
            [
                'name' => 'Ushuaia',
                'date_ini' => Carbon::parse('7-05-2023'),
                'date_end' => Carbon::parse('11-05-2023'),
                'destination_id' => 1
            ],
            [
                'name' => 'Santiago del Chile',
                'date_ini' => Carbon::parse('11-05-2023'),
                'date_end' => Carbon::parse('13-05-2023'),
                'destination_id' => 1
            ],
            [
                'name' => 'Montevideu',
                'date_ini' => Carbon::parse('13-05-2023'),
                'date_end' => Carbon::parse('15-05-2023'),
                'destination_id' => 1
            ],
            [
                'name' => 'Caxias do Sul',
                'date_ini' => Carbon::parse('15-05-2023'),
                'date_end' => Carbon::parse('20-05-2023'),
                'destination_id' => 1
            ]
        ]);
    }
}
