<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'email' => 'b@b.nl',
            'password' => '$2y$10$nVkFw7B9wA3/yXXeFt2XA.g7fkOAHvSDIFlKpde5hafI7G7FlQUAK',
            'name' => 'b@b.nl',
            'created_at' => '2017-03-10 00:00:00',
            'updated_at' => '2017-03-10 00:00:00',
            'deleted_at' => null,
            'remember_token' => null,
            'isadmin' => '1',
        ]);
    }
}
