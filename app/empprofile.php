<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empprofile extends Model
{
  protected $fillable=array('employer_id','companyname','altcompanyname','contactperson','designation','industrytype','companyaddress');
}
