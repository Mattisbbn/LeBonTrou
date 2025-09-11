<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trou;
use App\Models\Category;
use App\Models\TrouImage;
use App\Models\Shipment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1) Trou dans le sol
        Category::factory()->create(['id' => 1, 'name' => 'Trou dans le sol']);
        Trou::factory()->create([
            'id' => 1,
            'name' => 'Trou du Mans',
            'category_id' => 1,
            'depth' => 10,
            'volume' => 40,
            'location' => 'Le Mans',
            'diameter' => 4,
            'description' => 'Un beau trou dans l\'herbe pas loin du centre ville',
            'recommended_uses' => 'Jardinage, observation',
        ]);
        TrouImage::factory()->create([
            'trou_id' => 1,
            'file_path' => '/images/trous/TrouLeMans.jpg',
            'name' => 'Photo du Trou du Mans',
        ]);
        Shipment::factory()->create([
            'trou_id' => 1,
            'name' => 'Livraison standard',
            'time_to_ship' => 3,
            'price' => 0,
        ]);
        Shipment::factory()->create([
            'trou_id' => 1,
            'name' => 'Livraison par René la taupe express',
            'time_to_ship' => 1,
            'price' => 5,
        ]);

        // 2) Trou noir
        Category::factory()->create(['id' => 2, 'name' => 'Trou noir']);
        Trou::factory()->create([
            'id' => 2,
            'name' => 'Trou Noir Galactique',
            'category_id' => 2,
            'depth' => 999999,
            'volume' => 999999,
            'location' => 'Voie lactée',
            'diameter' => 100000,
            'description' => 'Un trou noir mystérieux et gigantesque',
            'recommended_uses' => 'Science, observation cosmique',
        ]);
        TrouImage::factory()->create([
            'trou_id' => 2,
            'file_path' => '/images/trous/TrouNoir.jpg',
            'name' => 'Photo du Trou noir',
        ]);
        Shipment::factory()->create([
            'trou_id' => 2,
            'name' => 'Livraison standard',
            'time_to_ship' => 600,
            'price' => 0,
        ]);
        Shipment::factory()->create([
            'trou_id' => 2,
            'name' => 'Livraison galactique Express',
            'time_to_ship' => 0,
            'price' => 500,
        ]);

        // 3) Trou de serrure
        Category::factory()->create(['id' => 3, 'name' => 'Trou de serrure']);
        Trou::factory()->create([
            'id' => 3,
            'name' => 'Petit trou de serrure',
            'category_id' => 3,
            'depth' => 1,
            'volume' => 1,
            'location' => 'Porte ancienne',
            'diameter' => 0.5,
            'description' => 'Un minuscule trou de serrure dans une porte en bois',
            'recommended_uses' => 'Sécurité, collection',
        ]);
        TrouImage::factory()->create([
            'trou_id' => 3,
            'file_path' => '/images/trous/TrouSerrure.jpg',
            'name' => 'Photo du trou de serrure',
        ]);
        Shipment::factory()->create([
            'trou_id' => 3,
            'name' => 'Livraison standard',
            'time_to_ship' => 3,
            'price' => 0,
        ]);
        Shipment::factory()->create([
            'trou_id' => 3,
            'name' => 'Livraison par Alice',
            'time_to_ship' => 1,
            'price' => 2,
        ]);

        // 4) Trou de mémoire
        Category::factory()->create(['id' => 4, 'name' => 'Trou de mémoire']);
        Trou::factory()->create([
            'id' => 4,
            'name' => 'Grand trou de mémoire',
            'category_id' => 4,
            'depth' => 100,
            'volume' => 5000,
            'location' => 'Dans ma tête',
            'diameter' => 50,
            'description' => 'Quand on oublie tout d’un coup…',
            'recommended_uses' => 'Relaxation, méditation',
        ]);
        TrouImage::factory()->create([
            'trou_id' => 4,
            'file_path' => '/images/trous/TrouMemoire.jpg',
            'name' => 'Illustration du trou de mémoire',
        ]);
        Shipment::factory()->create([
            'trou_id' => 4,
            'name' => 'Livraison oubliée',
            'time_to_ship' => 999,
            'price' => 0,
        ]);
        Shipment::factory()->create([
            'trou_id' => 4,
            'name' => 'Livraison Alzheimer',
            'time_to_ship' => 999,
            'price' => 1,
        ]);

        // 5) Trou dans le budget
        Category::factory()->create(['id' => 5, 'name' => 'Trou dans le budget']);
        Trou::factory()->create([
            'id' => 5,
            'name' => 'Gros trou dans le budget',
            'category_id' => 5,
            'depth' => 550,
            'volume' => 44000,
            'location' => 'Comptabilité',
            'diameter' => 80,
            'description' => 'Un déficit financier important',
            'recommended_uses' => 'Finance, analyse',
        ]);
        TrouImage::factory()->create([
            'trou_id' => 5,
            'file_path' => '/images/trous/TrouBudget.jpg',
            'name' => 'Illustration du trou dans le budget',
        ]);
        Shipment::factory()->create([
            'trou_id' => 5,
            'name' => 'Livraison payante',
            'time_to_ship' => 5,
            'price' => 10,
        ]);
        Shipment::factory()->create([
            'trou_id' => 5,
            'name' => 'Livraison chère',
            'time_to_ship' => 5,
            'price' => 25,
        ]);

        // 6) Trou Badour
        Category::factory()->create(['id' => 6, 'name' => 'Trou Badour']);
        Trou::factory()->create([
            'id' => 6,
            'name' => 'Le fameux Trou Badour',
            'category_id' => 6,
            'depth' => 3,
            'volume' => 6,
            'location' => 'Lieu inconnu',
            'diameter' => 2,
            'description' => 'Un trou légendaire du folklore local',
            'recommended_uses' => 'Folklore, histoire',
        ]);
        TrouImage::factory()->create([
            'trou_id' => 6,
            'file_path' => '/images/trous/TrouBadour.jpg',
            'name' => 'Photo du Trou Badour',
        ]);
        Shipment::factory()->create([
            'trou_id' => 6,
            'name' => 'Livraison par roulotte',
            'time_to_ship' => 3,
            'price' => 3,
        ]);
        Shipment::factory()->create([
            'trou_id' => 6,
            'name' => 'Livraison pigeon voyageur',
            'time_to_ship' => 1,
            'price' => 1,
        ]);

        // 7) Trou de souris
        Category::factory()->create(['id' => 7, 'name' => 'Trou de souris']);
        Trou::factory()->create([
            'id' => 7,
            'name' => 'Petit trou de souris',
            'category_id' => 7,
            'depth' => 0.2,
            'volume' => 0.2,
            'location' => 'Dans le mur de la cuisine',
            'diameter' => 1,
            'description' => 'Un petit passage pour les souris',
            'recommended_uses' => 'Animalerie, sécurité',
        ]);
        TrouImage::factory()->create([
            'trou_id' => 7,
            'file_path' => '/images/trous/TrouSouris.jpg',
            'name' => 'Photo du trou de souris',
        ]);
        Shipment::factory()->create([
            'trou_id' => 7,
            'name' => 'Livraison par Ratatouille',
            'time_to_ship' => 2,
            'price' => 1,
        ]);
        Shipment::factory()->create([
            'trou_id' => 7,
            'name' => 'Livraison par les Ratz en personne',
            'time_to_ship' => 1,
            'price' => 2,
        ]);

        // 8) Anne Troutrou
        Category::factory()->create(['id' => 8, 'name' => 'Anne Troutrou']);
        Trou::factory()->create([
            'id' => 8,
            'name' => 'L\'Ane Troutrou',
            'category_id' => 8,
            'depth' => 5,
            'volume' => 15,
            'location' => 'Secret',
            'diameter' => 3,
            'description' => 'L\'Ane Troutrou en personne',
            'recommended_uses' => 'Curiosité, collection',
        ]);
        TrouImage::factory()->create([
            'trou_id' => 8,
            'file_path' => '/images/trous/AnneTroutrou.jpg',
            'name' => 'Illustration du trou d’Anne Troutrou',
        ]);
        Shipment::factory()->create([
            'trou_id' => 8,
            'name' => 'Livraison très lente',
            'time_to_ship' => 15,
            'price' => 0,
        ]);
        Shipment::factory()->create([
            'trou_id' => 8,
            'name' => 'Livraison lente',
            'time_to_ship' => 14,
            'price' => 1,
        ]);
    }
}
