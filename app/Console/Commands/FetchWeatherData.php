<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Currency;

class FetchWeatherData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-weather-data {--lat=} {--lon=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Récupère les données de vent depuis OpenWeatherMap et les enregistre';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $lat = $this->option('lat') ?: config('services.openweather.lat');
        $lon = $this->option('lon') ?: config('services.openweather.lon');
        $units = config('services.openweather.units', 'metric');
        $apiKey = config('services.openweather.key');

        if (!$apiKey) {
            $this->error('OPENWEATHER_API_KEY manquant.');
            return Command::FAILURE;
        }
        if (!$lat || !$lon) {
            $this->error('Coordonnées lat/lon manquantes (options --lat/--lon ou config).');
            return Command::FAILURE;
        }

        try {
            $response = Http::retry(3, 200)->get('https://api.openweathermap.org/data/2.5/weather', [
                'lat' => $lat,
                'lon' => $lon,
                'appid' => $apiKey,
                'units' => $units,
            ]);

            if ($response->failed()) {
                $this->error('Echec requête OpenWeather: ' . $response->status());
                Log::error('OpenWeather request failed', ['status' => $response->status(), 'body' => $response->body()]);
                return Command::FAILURE;
            }

            $data = $response->json();
            $speed = data_get($data, 'wind.speed');
            $dt = data_get($data, 'dt');

            if ($speed === null || $dt === null) {
                $this->error('Réponse OpenWeather invalide: vitesse ou timestamp manquant.');
                Log::warning('Invalid OpenWeather response', ['data' => $data]);
                return Command::FAILURE;
            }

            $timestamp = now()->setTimestamp($dt);

            $price = 923 * $speed;
            $price /= 7;
            $price /= 150;


            Currency::create([
                'timestamp' => $timestamp,
                'price' => round($price, 2),
            ]);

            $this->info('Vent enregistré: ' . $speed . ' (' . $timestamp->toDateTimeString() . ')');
            return Command::SUCCESS;
        } catch (\Throwable $e) {
            Log::error('Erreur lors de la récupération du vent', ['exception' => $e]);
            $this->error('Erreur: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
