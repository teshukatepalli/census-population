<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class population_ror extends Model
{
    protected $fillable = ['county_id', 'ror_label', 'Population','Population_MOE','Uninsured','Uninsured_MOE','Uninsured_Pct','Uninsured_Pct_MOE'];
}
