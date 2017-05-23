<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logdata extends Model
{
    protected $fillable = ['employer_id','jobseeker_id','guest_ip','links'];
}
