<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /** @var array */
    private $data = [[
        "city" => "Jacksonville",
        "street" => "5 Fordem Point",
        "state" => "Florida",
        "code" => "32220",
        "country" => "United States"
    ], [
        "city" => "Colorado Springs",
        "street" => "4 Marquette Junction",
        "state" => "Colorado",
        "code" => "80940",
        "country" => "United States"
    ], [
        "city" => "Carson City",
        "street" => "77514 Donald Point",
        "state" => "Nevada",
        "code" => "89714",
        "country" => "United States"
    ], [
        "city" => "Beaufort",
        "street" => "62103 Eagan Trail",
        "state" => "South Carolina",
        "code" => "29905",
        "country" => "United States"
    ], [
        "city" => "Washington",
        "street" => "22205 Jenifer Road",
        "state" => "District of Columbia",
        "code" => "20260",
        "country" => "United States"
    ], [
        "city" => "Washington",
        "street" => "03109 Sachs Way",
        "state" => "District of Columbia",
        "code" => "20299",
        "country" => "United States"
    ], [
        "city" => "Sacramento",
        "street" => "915 Ramsey Center",
        "state" => "California",
        "code" => "95838",
        "country" => "United States"
    ], [
        "city" => "Tulsa",
        "street" => "4080 Kingsford Plaza",
        "state" => "Oklahoma",
        "code" => "74184",
        "country" => "United States"
    ], [
        "city" => "Saint Paul",
        "street" => "9626 American Crossing",
        "state" => "Minnesota",
        "code" => "55114",
        "country" => "United States"
    ], [
        "city" => "Memphis",
        "street" => "0 Farmco Court",
        "state" => "Tennessee",
        "code" => "38131",
        "country" => "United States"
    ], [
        "city" => "Tacoma",
        "street" => "51 Acker Street",
        "state" => "Washington",
        "code" => "98411",
        "country" => "United States"
    ], [
        "city" => "Beaufort",
        "street" => "48613 Lakewood Gardens Crossing",
        "state" => "South Carolina",
        "code" => "29905",
        "country" => "United States"
    ], [
        "city" => "Baltimore",
        "street" => "7176 Sunbrook Center",
        "state" => "Maryland",
        "code" => "21211",
        "country" => "United States"
    ], [
        "city" => "Saint Louis",
        "street" => "7 Eastwood Lane",
        "state" => "Missouri",
        "code" => "63180",
        "country" => "United States"
    ], [
        "city" => "Boston",
        "street" => "793 Stephen Road",
        "state" => "Massachusetts",
        "code" => "02283",
        "country" => "United States"
    ], [
        "city" => "Canton",
        "street" => "3 Rieder Parkway",
        "state" => "Ohio",
        "code" => "44760",
        "country" => "United States"
    ], [
        "city" => "Albuquerque",
        "street" => "4 Melby Terrace",
        "state" => "New Mexico",
        "code" => "87140",
        "country" => "United States"
    ], [
        "city" => "Fort Wayne",
        "street" => "76076 Messerschmidt Parkway",
        "state" => "Indiana",
        "code" => "46825",
        "country" => "United States"
    ], [
        "city" => "Irving",
        "street" => "5502 Quincy Street",
        "state" => "Texas",
        "code" => "75037",
        "country" => "United States"
    ], [
        "city" => "Gainesville",
        "street" => "898 Bluestem Terrace",
        "state" => "Florida",
        "code" => "32605",
        "country" => "United States"
    ], [
        "city" => "Greenville",
        "street" => "5 Logan Park",
        "state" => "South Carolina",
        "code" => "29610",
        "country" => "United States"
    ], [
        "city" => "Washington",
        "street" => "73 Swallow Road",
        "state" => "District of Columbia",
        "code" => "20319",
        "country" => "United States"
    ], [
        "city" => "Roanoke",
        "street" => "463 Fairfield Point",
        "state" => "Virginia",
        "code" => "24048",
        "country" => "United States"
    ], [
        "city" => "Philadelphia",
        "street" => "38 Prairie Rose Parkway",
        "state" => "Pennsylvania",
        "code" => "19136",
        "country" => "United States"
    ], [
        "city" => "Topeka",
        "street" => "4 Spenser Way",
        "state" => "Kansas",
        "code" => "66629",
        "country" => "United States"
    ], [
        "city" => "Billings",
        "street" => "49 Dwight Terrace",
        "state" => "Montana",
        "code" => "59112",
        "country" => "United States"
    ], [
        "city" => "Saint Augustine",
        "street" => "63816 Annamark Drive",
        "state" => "Florida",
        "code" => "32092",
        "country" => "United States"
    ], [
        "city" => "San Diego",
        "street" => "3 7th Court",
        "state" => "California",
        "code" => "92165",
        "country" => "United States"
    ], [
        "city" => "Birmingham",
        "street" => "381 Express Plaza",
        "state" => "Alabama",
        "code" => "35231",
        "country" => "United States"
    ], [
        "city" => "Baton Rouge",
        "street" => "4 Vidon Plaza",
        "state" => "Louisiana",
        "code" => "70883",
        "country" => "United States"
    ], [
        "city" => "Mansfield",
        "street" => "080 Homewood Hill",
        "state" => "Ohio",
        "code" => "44905",
        "country" => "United States"
    ], [
        "city" => "Flushing",
        "street" => "54 Fordem Junction",
        "state" => "New York",
        "code" => "11388",
        "country" => "United States"
    ]];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $data) {
            \App\Models\Address::create($data);
        }
    }
}
