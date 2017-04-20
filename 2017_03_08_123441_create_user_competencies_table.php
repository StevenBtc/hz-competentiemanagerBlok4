<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCompetenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_competencies', function (Blueprint $table) {
         $table->Integer ('user_id')->unsigned();
         $table->foreign('user_id')->references('id')->on('users');
         $table->Integer ('competency_id')->unsigned();
         $table->foreign ('competency_id')->references('id')->on('competencies');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_competencies');
    }
}
