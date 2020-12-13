<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTieuchiIdInBaocaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baocaos', function (Blueprint $table) {
            $table->unsignedInteger('tieuchi_id')->after('tieuchuan_id');
            $table->foreign('tieuchi_id')
                ->references('id')->on('tieuchis')
                -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('baocaos', function (Blueprint $table) {
            //
        });
    }
}
