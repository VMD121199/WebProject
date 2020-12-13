<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCapIdInBaocaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baocaos', function (Blueprint $table) {
            $table->unsignedInteger('cap_id')->after('noidungbaocao');
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
        Schema::table('baocaos', function (Blueprint $table) {
            //
        });
    }
}
