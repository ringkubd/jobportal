<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class js_reference extends Model
{
    public function jobseeker(){
	return $this->belongsTo('App\Jobseeker');
	}
}
