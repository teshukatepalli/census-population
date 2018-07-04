<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopulationGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('population_genders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('county_id');
            $table->string('gender');
            $table->integer('Population');
            $table->integer('Population_MOE');
            $table->integer('Uninsured');
            $table->integer('Uninsured_MOE');
            $table->double('Uninsured_Pct');
            $table->double('Uninsured_Pct_MOE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('population_genders');
    }
}
