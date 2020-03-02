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
        DB::table('users')->insert([
          "id"=>"2",
          "phone"=>"123456789",
          "adress"=>"Testowa 17",
          "status"=>"Avaible",
          "pesel"=>"123456789",
          "type"=>"Doctor"
        ]);
    }
}
