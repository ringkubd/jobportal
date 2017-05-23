<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Employer;

class verifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /*
     * Create a new message instance.
     *
     * @return void*/
     
    public $employer;
    public function __construct(Employer  $emp)
    {
        $this->employer=$emp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Email.employerVerify');
    }
}
