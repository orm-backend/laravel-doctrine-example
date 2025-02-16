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
        $this->call(ImageTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(EventTileTableSeeder::class);
    }
}
