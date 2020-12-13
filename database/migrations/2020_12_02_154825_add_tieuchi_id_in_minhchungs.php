<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTieuchiIdInMinhchungs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('minhchungs', function (Blueprint $table) {
            $table->unsignedInteger('tieuchi_id')->after('tenminhchung');
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
        Schema::table('minhchungs', function (Blueprint $table) {
            //
        });
    }
}
