<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class academic extends Model
{
    public function jobseeker(){
	return $this->belongsTo('App\Jobseeker');
	}

}
