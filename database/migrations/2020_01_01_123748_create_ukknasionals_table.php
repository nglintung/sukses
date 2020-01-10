<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUkknasionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukknasionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_ujian');
            $table->string('nis_id');
            $table->string('hari_sampel');
            $table->string('waktu_sampel');
            $table->string('ruang_sampel');
            $table->string('hari_praktikusk');
            $table->string('waktu_praktikusk');
            $table->string('ruang_praktikusk');
            $table->string('hari_input');
            $table->string('waktu_input');
            $table->string('ruang_input');
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
        Schema::dropIfExists('ukknasionals');
    }
}
