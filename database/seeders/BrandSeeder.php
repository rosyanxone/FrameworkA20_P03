<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'merek' => 'Playstation',
                'perusahaan' => 'SONY'
            ],
            [
                'merek' => 'Xbox',
                'perusahaan' => 'Microsoft'
            ],
        ];
        
        foreach($brands as $brand) {
            \App\Models\Brand::firstOrCreate($brand);
        }
    }
}
