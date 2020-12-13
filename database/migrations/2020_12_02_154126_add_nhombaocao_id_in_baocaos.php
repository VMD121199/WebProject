<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNhombaocaoIdInBaocaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baocaos', function (Blueprint $table) {
            $table->unsignedInteger('nhombaocao_id')->after('tenbaocao');
            $table->foreign('nhombaocao_id')
                ->references('id')->on('nhombaocaos')
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
