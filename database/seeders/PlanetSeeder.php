<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('seed')->get('swapi/planets.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $planet = new Planet();
            $planet->id = $item->id;
            $planet->fields = json_encode($item->fields);
            $planet->save();
        }
    }
}
