<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTieuchuanIdInMinhchungs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('minhchungs', function (Blueprint $table) {
            $table->unsignedInteger('tieuchuan_id')->after('tieuchi_id');
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
        Schema::table('minhchungs', function (Blueprint $table) {
            //
        });
    }
}
