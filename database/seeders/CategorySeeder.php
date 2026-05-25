<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Matic', 'description' => 'Motor matic yang mudah digunakan dan nyaman untuk berkendara di perkotaan.'],
            ['name' => 'Sport', 'description' => 'Motor sport yang dirancang untuk kecepatan dan performa tinggi.'],
            ['name' => 'Adventure', 'description' => 'Motor petualangan yang cocok untuk menjelajahi berbagai medan.'],
            ['name' => 'Cruiser', 'description' => 'Motor cruiser dengan desain klasik dan kenyamanan untuk perjalanan jarak jauh.'],
            ['name' => 'Scooter', 'description' => 'Motor skuter yang praktis dan efisien untuk mobilitas sehari-hari.'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']],
                ['description' => $category['description']]
            );
        }
    }
}
