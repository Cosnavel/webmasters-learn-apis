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
            $link = new Vehicle();
            $link->id = $item->id;
            $link->fields = json_encode($item->fields);
            $link->save();
        }
    }
}
