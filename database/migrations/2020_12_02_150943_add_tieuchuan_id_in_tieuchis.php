<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTieuchuanIdInTieuchis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tieuchis', function (Blueprint $table) {
            $table->unsignedInteger('tieuchuan_id')->after('tentieuchi');
            $table->foreign('tieuchuan_id')
                ->references('id')->on('tieuchuans')
                -> onDelete('cascade');

            $table->unsignedInteger('cap_id')->after('tieuchuan_id');
            $table->foreign('cap_id')
                ->references('id')->on('caps')
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
        Schema::table('tieuchis', function (Blueprint $table) {
            //
        });
    }
}
