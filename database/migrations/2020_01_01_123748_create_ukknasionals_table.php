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
            $table->string('hari_bakteri1');
            $table->string('waktu_bakteri1');
            $table->string('ruang_bakteri1');
            $table->string('hari_bakteri2');
            $table->string('waktu_bakteri2');
            $table->string('ruang_bakteri2');
            $table->string('hari_hema');
            $table->string('waktu_hema');
            $table->string('ruang_hema');
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
