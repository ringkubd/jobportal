<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personaldetails extends Model
{

public function jobseeker(){
	return $this->belongsTo('App\Jobseeker');
}
// protected $fillable=['profile_img'];

}
