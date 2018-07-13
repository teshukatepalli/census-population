<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class population_hh extends Model
{
    protected $fillable = ['county_id', 'income_from', 'income_to', 'Population','Population_MOE','Uninsured','Uninsured_MOE','Uninsured_Pct','Uninsured_Pct_MOE'];
}
