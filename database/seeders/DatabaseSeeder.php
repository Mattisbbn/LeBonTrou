<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trou;
use App\Models\Wind;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory(5)->create()->each(function ($category) {
            Trou::factory(3)->create([
                'category_id' => $category->id,
            ]);
        });

        // 50 mesures de vent
        Wind::factory(50)->create();
    }
}