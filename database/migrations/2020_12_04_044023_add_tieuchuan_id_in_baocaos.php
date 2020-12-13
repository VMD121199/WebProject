<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTieuchuanIdInBaocaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baocaos', function (Blueprint $table) {
            $table->unsignedInteger('tieuchuan_id')->after('cap_id');
            $table->foreign('tieuchuan_id')
                ->references('id')->on('tieuchuans')
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
