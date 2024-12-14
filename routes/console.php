<?php

use App\Models\VaccineCenter;
use App\Models\RegisteredUser;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Jobs\SendVaccinationNotification;
use Illuminate\Console\Scheduling\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('vaccination:schedule', function () {
    $usersToSchedule = RegisteredUser::where('status', 'Not Scheduled')
        ->orderBy('created_at')
        ->get();

    foreach ($usersToSchedule as $user) {
        $center = VaccineCenter::where('id' , $user->vaccine_center_id)->first();
        if (!$center->daily_limit > 0) {
            continue;
        }
        $center->daily_limit--;
        $center->save();
        $user->status = 'Scheduled';
        $user->save();
        SendVaccinationNotification::dispatch($user, $center);
    }

})
->dailyAt('21:00')
->days(
    [
        Schedule::SATURDAY, 
        Schedule::SUNDAY, 
        Schedule::MONDAY, 
        Schedule::TUESDAY, 
        Schedule::WEDNESDAY
    ])
->timezone('Asia/Dhaka');


Artisan::command('vaccination:reset', function () {
    $vaccineCenter = VaccineCenter::select('daily_limit')->get();

    foreach ($vaccineCenter as $center) {
        $center->daily_limit = $center->original_limit;
        $center->save();
    }

})
->dailyAt('1:13')
->timezone('Asia/Dhaka');


 