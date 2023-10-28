<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert([
            [
                'origin' => 'New York',
                'destination' => 'Los Angeles',
                'flight_number' => 'AB123',
                'name' => 'FlightName1',
            ],
            [
                'origin' => 'Armenia',
                'destination' => 'Georgia',
                'flight_number' => 'A12',
                'name' => 'FlightName2',
            ],
            [
                'origin' => 'Berlin',
                'destination' => 'Argentina',
                'flight_number' => 'AB3',
                'name' => 'FlightName3',
            ],
        ]);
    }
}
