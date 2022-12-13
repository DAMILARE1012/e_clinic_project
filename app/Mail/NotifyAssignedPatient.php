<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyAssignedPatient extends Mailable
{
    use Queueable, SerializesModels;

    public $complaint;
    public $assigned;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($complaint, $assigned)
    {
        $this->complaint = $complaint;
        $this->assigned = $assigned;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('receptionist.mails.assign-patient', ['complaint' => $this->complaint, 'assigned' => $this->assigned]);
    }
}
