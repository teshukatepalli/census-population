<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('populations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('County');
            $table->integer('Population');
            $table->integer('Population_MOE');
            $table->integer('Uninsured');
            $table->integer('Uninsured_MOE');
            $table->double('Uninsured_Pct');
            $table->double('Uninsured_Pct_MOE');
            $table->timestamps();

            // 2. population_ages
            // $table->string('Population_Under_18_years');
            // $table->string('Population_Under_18_years_MOE');
            // $table->string('Population_Under_18_years_Uninsured');
            // $table->string('Population_Under_18_years_Uninsured_MOE');
            // $table->string('Population_Under_18_years_Uninsured_Pct');
            // $table->string('Population_Under_18_years_Uninsured_Pct_MOE');
            // $table->string('Population_18_to_64_years');
            // $table->string('Population_18_to_64_years_MOE');
            // $table->string('Population_18_to_64_years_Uninsured');
            // $table->string('Population_18_to_64_years_Uninsured_MOE');
            // $table->string('Population_18_to_64_years_Uninsured_Pct');
            // $table->string('Population_18_to_64_years_Uninsured_Pct_MOE');
            // $table->string('Population_65_years_and_older');
            // $table->string('Population_65_years_and_older_MOE');
            // $table->string('Population_65_years_and_older_Uninsured');
            // $table->string('Population_65_years_and_older_Uninsured_MOE');
            // $table->string('Population_65_years_and_older_Uninsured_Pct');
            // $table->string('Population_65_years_and_older_Uninsured_Pct_MOE');
            // $table->string('Population_19_to_25_years');
            // $table->string('Population_19_to_25_years_MOE');
            // $table->string('Population_19_to_25_years_Uninsured');
            // $table->string('Population_19_to_25_years_Uninsured_MOE');
            // $table->string('Population_19_to_25_years_Uninsured_Pct');
            // $table->string('Population_19_to_25_years_Uninsured_Pct_MOE');

            //3.population_gender
            // $table->string('Male');
            // $table->string('Male_MOE');
            // $table->string('Male_Uninsured');
            // $table->string('Male_Uninsured_MOE');
            // $table->string('Male_Uninsured_Pct');
            // $table->string('Male_Uninsured_Pct_MOE');
            // $table->string('Female');
            // $table->string('Female_MOE');
            // $table->string('Female_Uninsured');
            // $table->string('Female_Uninsured_MOE');
            // $table->string('Female_Uninsured_Pct');
            // $table->string('Female_Uninsured_Pct_MOE');

            //4.population2_ror
            // $table->string('Ror');
            // $table->string('Ror_MOE');
            // $table->string('Ror_Uninsured');
            // $table->string('Ror_Uninsured_MOE');
            // $table->string('Ror_Uninsured_Pct');
            // $table->string('Ror_Uninsured_Pct_MOE');
            // $table->string('Ror_White');
            // $table->string('Ror_White_MOE');
            // $table->string('Ror_White_Uninsured');
            // $table->string('Ror_White_Uninsured_MOE');
            // $table->string('Ror_White_Uninsured_Pct');
            // $table->string('Ror_White_Uninsured_Pct_MOE');
            // $table->string('Ror_Black_or_African_American');
            // $table->string('Ror_Black_or_African_American_MOE');
            // $table->string('Ror_Black_or_African_American_Uninsured');
            // $table->string('Ror_Black_or_African_American_Uninsured_MOE');
            // $table->string('Ror_Black_or_African_American_Uninsured_Pct');
            // $table->string('Ror_Black_or_African_American_Uninsured_Pct_MOE');
            // $table->string('Rore_American_Indian_and_Alaska_Native');
            // $table->string('Ror_American_Indian_and_Alaska_Native_MOE');
            // $table->string('Ror_American_Indian_and_Alaska_Native_Uninsured');
            // $table->string('Ror_American_Indian_and_Alaska_Native_Uninsured_MOE');
            // $table->string('Ror_American_Indian_and_Alaska_Native_Uninsured_Pct');
            // $table->string('Ror_American_Indian_and_Alaska_Native_Uninsured_Pct_MOE');
            // $table->string('Ror_Asian');
            // $table->string('Ror_Asian_MOE');
            // $table->string('Ror_Asian_Uninsured');
            // $table->string('Ror_Asian_Uninsured_MOE');
            // $table->string('Ror_Asian_Uninsured_Pct');
            // $table->string('Ror_Asian_Uninsured_Pct_MOE');
            // $table->string('Ror_Native_Hawaiian_and_Other_Pacific_Islander');
            // $table->string('Ror_Native_Hawaiian_and_Other_Pacific_Islander_MOE');
            // $table->string('Ror_Native_Hawaiian_and_Other_Pacific_Islander_Uninsured');
            // $table->string('Ror_Native_Hawaiian_and_Other_Pacific_Islander_Uninsured_MOE');
            // $table->string('Ror_Native_Hawaiian_and_Other_Pacific_Islander_Uninsured_Pct');
            // $table->string('Ror_Native_Hawaiian_and_Other_Pacific_Islander_Uninsured_Pct_MOE');
            // $table->string('Ror_Some_other_race');
            // $table->string('Ror_Some_other_race_MOE');
            // $table->string('Ror_Some_other_race_Uninsured');
            // $table->string('Ror_Some_other_race_Uninsured_MOE');
            // $table->string('Ror_Some_other_race_Uninsured_Pct');
            // $table->string('Ror_Some_other_race_Uninsured_Pct_MOE');
            // $table->string('Race_Two_or_more_races');
            // $table->string('Race_Two_or_more_races_MOE');
            // $table->string('Race_Two_or_more_races_Uninsured');
            // $table->string('Race_Two_or_more_races_Uninsured_MOE');
            // $table->string('Race_Two_or_more_races_Uninsured_Pct');
            // $table->string('Race_Two_or_more_races_Uninsured_Pct_MOE');
            // $table->string('White_not_Hispanic_or_Latino');
            // $table->string('White_not_Hispanic_or_Latino_MOE');
            // $table->string('White_not_Hispanic_or_Latino_Uninsured');
            // $table->string('White_not_Hispanic_or_Latino_Uninsured_MOE');
            // $table->string('White_not_Hispanic_or_Latino_Uninsured_Pct');
            // $table->string('White_not_Hispanic_or_Latino_Uninsured_Pct_MOE');
            // $table->string('Hispanic_or_Latino_of_any_race');
            // $table->string('Hispanic_or_Latino_of_any_race_MOE');
            // $table->string('Hispanic_or_Latino_of_any_race_Uninsured');
            // $table->string('Hispanic_or_Latino_of_any_race_Uninsured_MOE');
            // $table->string('Hispanic_or_Latino_of_any_race_Uninsured_Pct');
            // $table->string('Hispanic_or_Latino_of_any_race_Uninsured_Pct_MOE');

            //5.pulation_hh household
            // $table->string('Household_Income');
            // $table->string('Household_Income_MOE');
            // $table->string('Household_Income_Uninsured');
            // $table->string('Household_Income_Uninsured_MOE');
            // $table->string('Household_Income_Uninsured_Pct');
            // $table->string('Household_Income_Uninsured_Pct_MOE');
            // $table->string('Household_Income_Under_25000');
            // $table->string('Household_Income_Under_25000_MOE');
            // $table->string('Household_Income_Under_25000_Uninsured');
            // $table->string('Household_Income_Under_25000_Uninsured_MOE');
            // $table->string('Household_Income_Under_25000_Uninsured_Pct');
            // $table->string('Household_Income_Under_25000_Uninsured_Pct_MOE');
            // $table->string('Household_Income_25000_to_49999');
            // $table->string('Household_Income_25000_to_49999_MOE');
            // $table->string('Household_Income_25000_to_49999_Uninsured');
            // $table->string('Household_Income_25000_to_49999_Uninsured_MOE');
            // $table->string('Household_Income_25000_to_49999_Uninsured_Pct');
            // $table->string('Household_Income_25000_to_49999_Uninsured_Pct_MOE');
            // $table->string('Household_Income_50000_to_74999');
            // $table->string('Household_Income_50000_to_74999_MOE');
            // $table->string('Household_Income_50000_to_74999_Uninsured');
            // $table->string('Household_Income_50000_to_74999_Uninsured_MOE');
            // $table->string('Household_Income_50000_to_74999_Uninsured_Pct');
            // $table->string('Household_Income_50000_to_74999_Uninsured_Pct_MOE');
            // $table->string('Household_Income_75000_to_99999');
            // $table->string('Household_Income_75000_to_99999_MOE');
            // $table->string('Household_Income_75000_to_99999_Uninsured');
            // $table->string('Household_Income_75000_to_99999_Uninsured_MOE');
            // $table->string('Household_Income_75000_to_99999_Uninsured_Pct');
            // $table->string('Household_Income_75000_to_99999_Uninsured_Pct_MOE');
            // $table->string('Household_Income_100000_and_over');
            // $table->string('Household_Income_100000_and_over_MOE');
            // $table->string('Household_Income_100000_and_over_Uninsured');
            // $table->string('Household_Income_100000_and_over_Uninsured_MOE');
            // $table->string('Household_Income_100000_and_over_Uninsured_Pct');
            // $table->string('Household_Income_100000_and_over_Uninsured_Pct_MOE');

            // 6.populations_poverty
            // $table->string('Roi_to_Poverty_Level');
            // $table->string('Roi_to_Poverty_Level_MOE');
            // $table->string('Roi_to_Poverty_Level_Uninsured');
            // $table->string('Roi_to_Poverty_Level_Uninsured_MOE');
            // $table->string('Roi_to_Poverty_Level_Uninsured_Pct');
            // $table->string('Roi_to_Poverty_Level_Uninsured_Pct_MOE');
            // $table->string('Roi_to_Poverty_Level_Under_138_of_poverty');
            // $table->string('Roi_to_Poverty_Level_Under_138_of_poverty_MOE');
            // $table->string('Roi_to_Poverty_Level_Under_138_of_poverty_Uninsured');
            // $table->string('Roi_to_Poverty_Level_Under_138_of_poverty_Uninsured_MOE');
            // $table->string('Roi_to_Poverty_Level_Under_138_of_poverty_Uninsured_Pct');
            // $table->string('Roi_to_Poverty_Level_Under_138_of_poverty_Uninsured_Pct_MOE');
            // $table->string('Roi_to_Poverty_Level_138_to_199_of_poverty');
            // $table->string('Roi_to_Poverty_Level_138_to_199_of_poverty_MOE');
            // $table->string('Roi_to_Poverty_Level_138_to_199_of_poverty_Uninsured');
            // $table->string('Roi_to_Poverty_Level_138_to_199_of_poverty_Uninsured_MOE');
            // $table->string('Roi_to_Poverty_Level_138_to_199_of_poverty_Uninsured_Pct');
            // $table->string('Roi_to_Poverty_Level_138_to_199_of_poverty_Uninsured_Pct_MOE');
            // $table->string('Roi_to_Poverty_Level_200_of_poverty_and_over');
            // $table->string('Roi_to_Poverty_Level_200_of_poverty_and_over_MOE');
            // $table->string('Roi_to_Poverty_Level_200_of_poverty_and_over_Uninsured');
            // $table->string('Roi_to_Poverty_Level_200_of_poverty_and_over_Uninsured_MOE');
            // $table->string('Roi_to_Poverty_Level_200_of_poverty_and_over_Uninsured_Pct');
            // $table->string('Roi_to_Poverty_Level_200_of_poverty_and_over_Uninsured_Pct_MOE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('populations');
    }
}
