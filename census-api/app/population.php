<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class population extends Model
{
    protected $fillable = ['County', 'Population','Population_MOE','Uninsured','Uninsured_MOE','Uninsured_Pct','Uninsured_Pct_MOE'];
}
