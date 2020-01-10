<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUkknasfmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukknasfms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_ujian');
            $table->string('nis_id');
            $table->string('hari_pira_sek');
            $table->string('waktu_pira_sek');
            $table->string('ruang_pira_sek');
            $table->string('hari_pira_nas');
            $table->string('waktu_pira_nas');
            $table->string('ruang_pira_nas');
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
        Schema::dropIfExists('ukknasfms');
    }
}
