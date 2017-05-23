<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specialization extends Model
{
    public function jobseeker(){
	return $this->belongsTo('App\Jobseeker');
	}
}
