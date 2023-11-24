<?php

namespace Database\Seeders;

use App\Models\Destinations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $destinations = ([
            ([
                "nama" => "Makam Sunan Gunung Jati",
                "location" => "Gunung Jati",
                "details" => "Pemakaman",
                "day_open" => "Setiap Hari",
                "time_open" => "07:00 WIB",
                "pricing" => "Gratis",
            ]),
            ([
                "nama" => "Waterpark Ciperna",
                "location" => "Ciperna",
                "details" => "Kolam Renang",
                "day_open" => "Setiap Hari",
                "time_open" => "07:00 WIB",
                "pricing" => "Berbayar",
            ])
        ]);

        Destinations::insert($destinations);
    }
}
