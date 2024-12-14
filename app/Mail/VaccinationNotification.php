<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class VaccinationNotification extends Mailable
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Vaccination Appointment Scheduled')
            ->view('emails.vaccination_notification')
            ->with([
                'name' => $this->user->name,
                'scheduled_date' => $this->user->scheduled_date,
                'center' => $this->user->vaccineCenter->name,
            ]);
    }
}
