<?php
namespace App\Mail;

use App\Models\VaccineCenter;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\RegisteredUser;
use Illuminate\Queue\SerializesModels;

class VaccinationScheduled extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $vaccineCenter;
    public $scheduleDateTime;

    /**
     * Create a new message instance.
     *
     * @param  RegisteredUser  $user
     * @return void
     */
    public function __construct(RegisteredUser $user, VaccineCenter $center, $scheduleDateTime)
    {
        $this->user = $user;
        $this->vaccineCenter = $center;
        $this->scheduleDateTime = $scheduleDateTime;
    }

    /**
     * Build the message.
     *
     * @return \Illuminate\Mail\Mailable
     */
    public function build()
    {
        return $this->view('emails.vaccination_scheduled')
                   ->with([
                        'user' => $this->user,
                        'scheduleDateTime' => $this->scheduleDateTime,
                        'vaccineCenter' => $this->vaccineCenter
                    ]);
    }
}
