<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNotificationToCandidate extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $description;
    public $candidate_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($candidate_name,$subject,$description)
    {
        $this->subject = $subject;
        $this->description = $description;
        $this->candidate_name = $candidate_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject($this->subject)
        ->view('emails.sendnotificationtocandidate');
    }
}
