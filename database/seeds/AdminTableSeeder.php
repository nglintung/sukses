<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => "Fuad Zen",
            'email' => 'fuadzen@gmail.com',
            'password' => bcrypt('qweasd123'),
        ]);
    }
}
