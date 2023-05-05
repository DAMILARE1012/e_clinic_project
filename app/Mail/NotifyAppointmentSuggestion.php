<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyAppointmentSuggestion extends Mailable
{
    use Queueable, SerializesModels;

    public $appointments;
    public $patient;
    public $specialist;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appointments, $patient, $specialist)
    {
        $this->appointments = $appointments;
        $this->patient = $patient;
        $this->specialist = $specialist;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('user.mails.appointment-suggestion');
    }
}
