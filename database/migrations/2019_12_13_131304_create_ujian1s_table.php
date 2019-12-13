<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUjian1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis_id', 5);
            $table->string('no_ujian');
            $table->string('ruang_usk_teori');
            $table->string('hari_usk');
            $table->string('waktu_usk');
            $table->string('ruang_usk_praktek');
            $table->string('hari_agama');
            $table->string('waktu_agama');
            $table->string('hari_ipa');
            $table->string('waktu_ipa');
            $table->string('hari_or');
            $table->string('hari_wirausaha');
            $table->string('waktu_wirausaha');
            $table->string('ruang_wirausaha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ujian1s');
    }
}
