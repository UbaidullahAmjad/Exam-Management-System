<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
// use Illuminate\Contracts\Queue\ShouldQueue;

class ApproveCandidateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $candidate_name;
    public $paper;
    public $auth_id;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($auth_id,$candidate_name,$paper)
    {
        $this->candidate_name = $candidate_name;
        $this->auth_id = $auth_id;
        $this->paper = $paper;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Exam Approval')
                    ->view('emails.approvecandidatemail',[
                        'candidate' => $this->candidate_name,
                        'auth_id' => $this->auth_id,
                        'paper' => $this->paper
                    ]);
    }
}
