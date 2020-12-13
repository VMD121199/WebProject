<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMinhchungIdInBaocaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baocaos', function (Blueprint $table) {
            $table->unsignedInteger('minhchung_id')->after('tieuchi_id');
            $table->foreign('minhchung_id')
                ->references('id')->on('minhchungs')
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
