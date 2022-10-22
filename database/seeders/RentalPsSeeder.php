<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentalPsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rentps = [
            [
                'jenis' => 'Ps 3',
                'harga' => '7000',
                'per_week' => '39900',
                'brand_id' => 1
            ],
            [
                'jenis' => 'Ps 4',
                'harga' => '10000',
                'per_week' => '64900',
                'brand_id' => 1
            ],
            [
                'jenis' => 'Ps 5',
                'harga' => '12000',
                'per_week' => '79900',
                'brand_id' => 1
            ],
            [
                'jenis' => 'Xbox One',
                'harga' => '9000',
                'per_week' => '59900',
                'brand_id' => 2
            ],
            [
                'jenis' => 'Xbox One X',
                'harga' => '11000',
                'per_week' => '69900',
                'brand_id' => 2
            ]
        ];

        foreach($rentps as $ps) {
            \App\Models\RentalPs::firstOrCreate($ps);
        }
    }
}
