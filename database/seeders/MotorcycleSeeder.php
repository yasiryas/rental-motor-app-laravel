<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Motorcycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matic = Category::where('name', 'Matic')->first();

        Motorcycle::create([
            'category_id' => $matic->id,
            'name' => 'Vario 125',
            'brand' => 'Honda',
            'year' => 2024,
            'plate_number' => 'B1234VAR',
            'price_per_day' => 150000,
            'status' => 'available',
            'description' => 'Motor matic irit dan nyaman',
        ]);

        Motorcycle::create([
            'category_id' => $matic->id,
            'name' => 'NMAX',
            'brand' => 'Yamaha',
            'year' => 2023,
            'plate_number' => 'B5678NMX',
            'price_per_day' => 250000,
            'status' => 'available',
            'description' => 'Motor premium touring',
        ]);
    }
}
