<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('roles')->insert(array(
            array('name' => 'Admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'User', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
        ));
    }
}
