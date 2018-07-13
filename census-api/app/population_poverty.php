<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class population_poverty extends Model
{
    protected $fillable = ['county_id', 'line_from', 'line_to', 'Population','Population_MOE','Uninsured','Uninsured_MOE','Uninsured_Pct','Uninsured_Pct_MOE'];
}
