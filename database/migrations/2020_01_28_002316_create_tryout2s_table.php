<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTryout2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tryout2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nopes');
            $table->string('peserta');
            $table->string('ruang');
            $table->string('client');
            $table->string('server');
            $table->string('sesi');
            $table->string('waktu');
            $table->string('nis_id');
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
        Schema::dropIfExists('tryout2s');
    }
}
