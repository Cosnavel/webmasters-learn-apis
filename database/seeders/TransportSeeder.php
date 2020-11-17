<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('seed')->get('swapi/transport.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $transport = new Transport();
            $transport->id = $item->id;
            $transport->edited = $item->fields->edited;
            $transport->consumables = $item->fields->consumables;
            $transport->name = $item->fields->name;
            $transport->created = $item->fields->created;
            $transport->cargo_capacity = $item->fields->cargo_capacity;
            $transport->passengers = $item->fields->passengers;
            $transport->max_atmosphering_speed = $item->fields->max_atmosphering_speed;
            $transport->crew = $item->fields->crew;
            $transport->length = $item->fields->length;
            $transport->cost_in_credits = $item->fields->cost_in_credits;
            $transport->manufacturer = $item->fields->manufacturer;
            $transport->save();
        }
    }
}
