<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applied_job extends Model
{
     protected $fillable=['job_id','jobseeker_id','employer_id','expected_salary'];
}
