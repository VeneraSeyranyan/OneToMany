<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            [

                'flight_id' => 1,
                'ticket_number' => 56789,
                'passenger_name' => 'John',
                'boarding_gate' => 'Gate A4',
                'class' => 'Economy',
                'boarding_time' => '2023-10-28 12:45:24',
            ],
            [
                'flight_id' => 2,
                'ticket_number' => 5689,
                'passenger_name' => 'Jiean',
                'boarding_gate' => 'Gate A5',
                'class' => 'Economy',
                'boarding_time' => '2023-10-28  10:11:40',
            ],
            [
                'flight_id' => 3,
                'ticket_number' => 5679,
                'passenger_name' => 'Ann',
                'boarding_gate' => 'Gate A6',
                'class' => 'Economy',
                'boarding_time' => '2023-10-28 14:10:15',
            ],
            [
                'flight_id' => 3,
                'ticket_number' => 5687,
                'passenger_name' => 'Anna',
                'boarding_gate' => 'Gate A7',
                'class' => 'Economy',
                'boarding_time' => '2023-10-28  15:10:25',
            ],
        ]);
    }
}
