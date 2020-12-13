<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCapIdInTieuchuans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tieuchuans', function (Blueprint $table) {
            $table->unsignedInteger('cap_id')->after('tentieuchuan');
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
        Schema::table('tieuchuans', function (Blueprint $table) {
            //
        });
    }
}
