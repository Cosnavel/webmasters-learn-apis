<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FilmSeeder::class,
            PeopleSeeder::class,
            PlanetSeeder::class,
            SpecieSeeder::class,
            StarshipSeeder::class,
            TransportSeeder::class,
        ]);
    }
}
