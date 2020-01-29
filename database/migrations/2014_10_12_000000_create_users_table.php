<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('dep_id')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('tel')->unique();
            //$table->integer('r_o_l_e_id')->unsigned();
           // $table->foreign('r_o_l_e_id')->references('id')->on('r_o_l_e_s');
            $table->timestamp('date_naissance');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

           // $table->foreign('dep_id')->references('id')->on('departements');
        });
       /* Schema::table('r_o_l_e_s', function($table) {
            $table->foreign('role_id')->references('id')->on('r_o_l_e_s');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
