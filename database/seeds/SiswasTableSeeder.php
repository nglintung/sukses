<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'name' => "Fuad Zen",
            'nis_id' => 12121,
            'nisn' => 12345678912,
            'ttl' => date('1994/08/07'),
            'kelas' => 'XII FM 1',
            'namaortu' => 'Fauzan Zen',
            'password' => bcrypt('qweasd'),
        ]);
    }
}
