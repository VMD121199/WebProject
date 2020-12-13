<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaocaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baocaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenbaocao');
            $table->string('danhgia');
            $table->text('noidungbaocao');
         //   $table->unsignedInteger('nhombaocao_id');
         //   $table->foreign('nhombaocao_id')->references('id')->on('nhombaocaos');
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
        Schema::dropIfExists('baocaos');
    }
}
