<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTieuchisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tieuchis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tentieuchi');
          //  $table->unsignedInteger('tieuchuan_id');
          //  $table->foreign('tieuchuan_id')->references('id')->on('tieuchuans');
         //   $table->unsignedInteger('cap_id');
         //   $table->foreign('cap_id')->references('id')->on('caps');
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
        Schema::dropIfExists('tieuchis');
    }
}
