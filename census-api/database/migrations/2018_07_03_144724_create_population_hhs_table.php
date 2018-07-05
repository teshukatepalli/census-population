<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopulationHhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('population_hhs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('county_id');
            $table->double('income_from');
            $table->double('income_to');
            $table->integer('Population');
            $table->integer('Population_MOE');
            $table->integer('Uninsured');
            $table->integer('Uninsured_MOE');
            $table->double('Uninsured_Pct');
            $table->double('Uninsured_Pct_MOE');
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
        Schema::dropIfExists('population_hhs');
    }
}
