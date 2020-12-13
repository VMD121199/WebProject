<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinhchungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minhchungs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenminhchung');
            $table->string('noibanhanh');
            $table->dateTime('ngaybanhanh');
            $table->integer('sohieu');
         //   $table->integer('tieuchi_id');
           // $table->unsignedInteger('tieuchi_id');
         //   $table->foreign('tieuchi_id')->references('id')->on('tieuchis');
         //   $table->integer('tieuchuan_id');
         //   $table->unsignedInteger('tieuchuan_id');
          //  $table->foreign('tieuchuan_id')->references('id')->on('tieuchuans');
          //  $table->integer('cap_id');
          //  $table->unsignedInteger('cap_id');
          //  $table->foreign('cap_id')->references('id')->on('caps');
            $table->string('noidung');
            $table->text('file')->nullable();
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
        Schema::dropIfExists('minhchungs');
    }
}
