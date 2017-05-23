<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class message extends Model
{
    use Notifiable;

    protected $fillable = [
        'jobseeker_sender_id', 'employer_sender_id', 'jobseeker_recepent_id','employer_recepent_id','parent_message_id','subject','messages',
    ];
}
