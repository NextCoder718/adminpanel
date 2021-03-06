<?php

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
         $this->call(StatesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(AgentsTableSeeder::class);
         $this->call(ProducersTableSeeder::class);
         $this->call(LeadsTableSeeder::class);
    }
}
