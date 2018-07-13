<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class population_gender extends Model
{
    protected $fillable = ['county_id', 'gender', 'Population','Population_MOE','Uninsured','Uninsured_MOE','Uninsured_Pct','Uninsured_Pct_MOE'];
}
