<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 32; $i++) {
            \App\Models\Property::create([
                "title" => \Faker\Factory::create()->text(32),
                "description" => \Faker\Factory::create()->text(64),
                "price" => rand(10000000, 100000000),
                "lat" => rand(0, 1800) / 10,
                "lng" => rand(0, 1800) / 10,
                "address_id" => \App\Models\Address::inRandomOrder()->get()->first()->id
            ]);
        }
    }
}
