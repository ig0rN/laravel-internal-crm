<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            array('name' => 'Paolo Meloni', 'email' => 'paolo.meloni@mpsoft.ch', 'password' => bcrypt('paolomeloni123'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role_id' => '1'),
            array('name' => 'Milan Vejnovic', 'email' => 'milan.vejnovic@mpsoft.ch', 'password' => bcrypt('milanvejnovic123'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role_id' => '1'),
            array('name' => 'Igor Nikolic', 'email' => 'igor@test.com', 'password' => bcrypt('igor123'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role_id' => '1'),
            array('name' => 'Dragan Nikolic', 'email' => 'dragan@test.com', 'password' => bcrypt('dragan123'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role_id' => '2'),
        ));
    }
}