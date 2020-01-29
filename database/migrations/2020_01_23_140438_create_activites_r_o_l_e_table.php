<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitesROLETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites_r_o_l_e', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('activite_id');
            $table->unsignedBigInteger('role_id');
            $table->foreign('activite_id')->references('id')->on('activites');
            $table->foreign('role_id')->references('id')->on('r_o_l_e_s');
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
        Schema::dropIfExists('activites_r_o_l_e');
    }
}
