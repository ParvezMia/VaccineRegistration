<?php
namespace App\Jobs;

use Carbon\Carbon;
use App\Models\VaccineCenter;
use Illuminate\Bus\Queueable;
use App\Models\RegisteredUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendVaccinationNotification implements ShouldQueue
{
    use Dispatchable, Queueable, SerializesModels;

    protected $user;
    protected $center;
    protected $scheduleDateTime;

    /**
     * Create a new job instance.
     *
     * @param  RegisteredUser  $user
     * @return void
     */
    public function __construct(RegisteredUser $user, VaccineCenter $center)
    {
        $this->user = $user;
        $this->scheduleDateTime = Carbon::tomorrow()->setHour(9)->setMinute(0);
        $this->center = $center;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Send email notification (you need to create an email view)
        Mail::to($this->user->email)->send(new \App\Mail\VaccinationScheduled($this->user, $this->center, $this->scheduleDateTime));
    }
}
