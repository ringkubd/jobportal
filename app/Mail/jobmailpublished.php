<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class jobmailpublished extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void

     */
    private $job_title;
    private $contract_person;

    public function __construct($jobtitle,$contactperson)
    {
        //$this->build($jobtitle);
        $this->job_title = $jobtitle;
        $this->contract_person = $contactperson;
        //parent::__construct();
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {    $jobtitle = $this->job_title;
        $contactperson = $this->contract_person;

        return $this->markdown('jobmail.mailpubleshed',compact('jobtitle','contactperson'));
    }
}
