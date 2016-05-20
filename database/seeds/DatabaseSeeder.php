<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
             'name' => str_random(10),
             'surname' => str_random(10),
             'api_token' => str_random(10),
             'email' => str_random(10).'@gmail.com',
             'password' => crypt('secret'),
         ]);
    }
}
