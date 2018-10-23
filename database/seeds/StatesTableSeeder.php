<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//
        DB::table('states')->delete();
        $states = [
            ['name' => "Alabama"],
            ['name' => "Alaska"],
            ['name' => "Arizona"],
            ['name' => "Arkansas"],
            ['name' => "Byram"],
            ['name' => "California"],
            ['name' => "Cokato"],
            ['name' => "Colorado"],
            ['name' => "Connecticut"],
            ['name' => "Delaware"],
            ['name' => "District of Columbia"],
            ['name' => "Florida"],
            ['name' => "Georgia"],
            ['name' => "Hawaii"],
            ['name' => "Idaho"],
            ['name' => "Illinois"],
            ['name' => "Indiana"],
            ['name' => "Iowa"],
            ['name' => "Kansas"],
            ['name' => "Kentucky"],
            ['name' => "Louisiana"],
            ['name' => "Lowa"],
            ['name' => "Maine"],
            ['name' => "Maryland"],
            ['name' => "Massachusetts"],
            ['name' => "Medfield"],
            ['name' => "Michigan"],
            ['name' => "Minnesota"],
            ['name' => "Mississippi"],
            ['name' => "Missouri"],
            ['name' => "Montana"],
            ['name' => "Nebraska"],
            ['name' => "Nevada"],
            ['name' => "New Hampshire"],
            ['name' => "New Jersey"],
            ['name' => "New Jersy"],
            ['name' => "New Mexico"],
            ['name' => "New York"],
            ['name' => "North Carolina"],
            ['name' => "North Dakota"],
            ['name' => "Ohio"],
            ['name' => "Oklahoma"],
            ['name' => "Ontario"],
            ['name' => "Oregon"],
            ['name' => "Pennsylvania"],
            ['name' => "Ramey"],
            ['name' => "Rhode Island"],
            ['name' => "South Carolina"],
            ['name' => "South Dakota"],
            ['name' => "Sublimity"],
            ['name' => "Tennessee"],
            ['name' => "Texas"],
            ['name' => "Trimble"],
            ['name' => "Utah"],
            ['name' => "Vermont"],
            ['name' => "Virginia"],
            ['name' => "Washington"],
            ['name' => "West Virginia"],
            ['name' => "Wisconsin"],
            ['name' => "Wyoming"],
        ];
        DB::table('states')->insert($states);
    }
}
