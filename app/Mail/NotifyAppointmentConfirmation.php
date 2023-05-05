<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyAppointmentConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;
    public $patient;
    public $specialist;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appointment, $patient, $specialist)
    {
        $this->appointment = $appointment;
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
        return $this->view('specialist.mails.appointment-confirmation');
    }
}
