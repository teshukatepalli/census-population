<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class population_age extends Model
{
     protected $fillable = ['county_id', 'age_from','age_to', 'Population','Population_MOE','Uninsured','Uninsured_MOE','Uninsured_Pct','Uninsured_Pct_MOE'];
}
