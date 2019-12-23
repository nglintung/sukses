<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUjian2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis_id', 5);
            $table->string('no_ujian');
            $table->string('hari_tpp');
            $table->string('waktu_tpp');
            $table->string('ruang_tpp');
            $table->string('hari_bakteri1');
            $table->string('waktu_bakteri1');
            $table->string('ruang_bakteri1');
            $table->string('hari_bakteri2');
            $table->string('waktu_bakteri2');
            $table->string('ruang_bakteri2');
            $table->string('hari_hematologi');
            $table->string('waktu_hematologi');
            $table->string('ruang_hematologi');
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
        Schema::dropIfExists('ujian2s');
    }
}
