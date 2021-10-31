<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BodySeeder::class,
            FilmSeeder::class,
            PeopleSeeder::class,
            PlanetSeeder::class,
            SpecieSeeder::class,
            StarshipSeeder::class,
            TransportSeeder::class,
            VehicleSeeder::class,
        ]);
    }
}
