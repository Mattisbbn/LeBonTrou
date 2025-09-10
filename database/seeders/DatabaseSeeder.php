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

        Category::factory()->create([
            'name' => 'Trou dans le sol',
            'id' => 1,
        ]);

        Trou::factory()->create([
            'name' => 'Trou du Mans',
            'category_id' => 1,
            'depth' => 10,
            'volume' => 40,
            'location' => 'Le Mans',
            'diameter' => 4,
            'description' => 'Un beau trou dans l\'herbe pas loin du centre ville',
        ]);

        TrouImage::factory()->create([
            'trou_id' => 1,
            'file_path' => 'public/images/trous/TrouLeMans.jpg',
            'name' => 'Photo du Trou du Mans',
        ]);

        // 2) Trou noir
        Category::factory()->create([
            'id' => 2,
            'name' => 'Trou noir',
        ]);

        Trou::factory()->create([
            'id' => 2,
            'name' => 'Trou Noir Galactique',
            'category_id' => 2,
            'depth' => 999999,
            'volume' => 999999,
            'location' => 'Voie lactée',
            'diameter' => 100000,
            'description' => 'Un trou noir mystérieux et gigantesque',
        ]);

        TrouImage::factory()->create([
            'trou_id' => 2,
            'file_path' => 'public/images/trous/TrouNoir.jpg',
            'name' => 'Photo du Trou noir',
        ]);

        // 3) Trou de serrure
        Category::factory()->create([
            'id' => 3,
            'name' => 'Trou de serrure',
        ]);

        Trou::factory()->create([
            'id' => 3,
            'name' => 'Petit trou de serrure',
            'category_id' => 3,
            'depth' => 1,
            'volume' => 1,
            'location' => 'Porte ancienne',
            'diameter' => 0.5,
            'description' => 'Un minuscule trou de serrure dans une porte en bois',
        ]);

        TrouImage::factory()->create([
            'trou_id' => 3,
            'file_path' => 'public/images/trous/TrouSerrure.jpg',
            'name' => 'Photo du trou de serrure',
        ]);

        // 4) Trou de mémoire
        Category::factory()->create([
            'id' => 4,
            'name' => 'Trou de mémoire',
        ]);

        Trou::factory()->create([
            'id' => 4,
            'name' => 'Grand trou de mémoire',
            'category_id' => 4,
            'depth' => 100,
            'volume' => 5000,
            'location' => 'Dans ma tête',
            'diameter' => 50,
            'description' => 'Quand on oublie tout d’un coup…',
        ]);

        TrouImage::factory()->create([
            'trou_id' => 4,
            'file_path' => 'public/images/trous/TrouMemoire.jpg',
            'name' => 'Illustration du trou de mémoire',
        ]);

        // 5) Trou dans le budget
        Category::factory()->create([
            'id' => 5,
            'name' => 'Trou dans le budget',
        ]);

        Trou::factory()->create([
            'id' => 5,
            'name' => 'Gros trou dans le budget',
            'category_id' => 5,
            'depth' => 550,
            'volume' => 44000,
            'location' => 'Comptabilité',
            'diameter' => 80,
            'description' => 'Un déficit financier important',
        ]);

        TrouImage::factory()->create([
            'trou_id' => 5,
            'file_path' => 'public/images/trous/TrouBudget.jpg',
            'name' => 'Illustration du trou dans le budget',
        ]);

        // 6) Trou Badour
        Category::factory()->create([
            'id' => 6,
            'name' => 'Trou Badour',
        ]);

        Trou::factory()->create([
            'id' => 6,
            'name' => 'Le fameux Trou Badour',
            'category_id' => 6,
            'depth' => 3,
            'volume' => 6,
            'location' => 'Lieu inconnu',
            'diameter' => 2,
            'description' => 'Un trou légendaire du folklore local',
        ]);

        TrouImage::factory()->create([
            'trou_id' => 6,
            'file_path' => 'public/images/trous/TrouBadour.jpg',
            'name' => 'Photo du Trou Badour',
        ]);

        // 7) Trou de souris
        Category::factory()->create([
            'id' => 7,
            'name' => 'Trou de souris',
        ]);

        Trou::factory()->create([
            'id' => 7,
            'name' => 'Petit trou de souris',
            'category_id' => 7,
            'depth' => 0.2,
            'volume' => 0.2,
            'location' => 'Dans le mur de la cuisine',
            'diameter' => 1,
            'description' => 'Un petit passage pour les souris',
        ]);

        TrouImage::factory()->create([
            'trou_id' => 7,
            'file_path' => 'public/images/trous/TrouSouris.jpg',
            'name' => 'Photo du trou de souris',
        ]);

        // 8) Anne Troutrou
        Category::factory()->create([
            'id' => 8,
            'name' => 'Anne Troutrou',
        ]);

        Trou::factory()->create([
            'id' => 8,
            'name' => 'L\'Anne Troutrou',
            'category_id' => 8,
            'depth' => 5,
            'volume' => 15,
            'location' => 'Secret',
            'diameter' => 3,
            'description' => 'L\'anneau Troutrou en personne',
        ]);

        TrouImage::factory()->create([
            'trou_id' => 8,
            'file_path' => 'public/images/trous/TrouAnneTroutrou.jpg',
            'name' => 'Illustration du trou d’Anne Troutrou',
        ]);

    }

}