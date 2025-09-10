<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trou;
use App\Models\Wind;
use App\Models\Category;
use App\Models\TrouImage;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        // 50 mesures de vent
        Wind::factory(50)->create();

        Category::factory(1)->create([
            'name' => 'Trou dans le sol',
            'id' => 1,
        ]);

        Trou::factory(1)->create([
            'name' => 'Trou du Mans',
            'category_id' => 1,
            'depth' => 10,
            'volume' => 40,
            'location' => 'Le Mans',
            'diameter' => 4,
            'description' => 'Un beau trou dans l\'herbe pas loin du centre ville',
        ]);

        TrouImage::factory(1)->create([
            'trou_id' => 1,
            'file_path' => 'images/trou1.jpg',
            'name' => 'Photo du Trou du Mans',
        ]);
    }

}