<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PagesTableSeeder::class);
        $this->call(LangsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(TypeOneTableSeeder::class);
        $this->call(TypeTwoTableSeeder::class);
        $this->call(TypeSectionsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
    }
}
