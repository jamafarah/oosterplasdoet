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
        // $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(WebsiteTextSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(HomepageWebsiteTextSeeder::class);
    }
}
