<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('seed')->get('swapi/vehicles.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $vehicle = new Vehicle();
            $vehicle->id = $item->id;
            $vehicle->vehicle_class = $item->fields->vehicle_class;
            $vehicle->pilots = json_encode($item->fields->pilots);
            $vehicle->save();
        }
    }
}
