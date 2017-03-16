<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => 'B-battle',
            'content' => 'Zoals elk jaar weer organiseren wij de B-battle<br />De winnaars van vorig jaar was Zeilvereniging Oosterplas.<br />We zijn benieuwd wie dit jaar gaat winnen, doe jij mee?',
            'startDate' => '2017-06-23 16:00:00',
            'endDate' => '2017-06-23 20:00:00',
            'created_at' => '2017-03-10 00:00:00',
            'updated_at' => '2017-03-10 00:00:00',
            'deleted_at' => null,
        ]);
    }
}
