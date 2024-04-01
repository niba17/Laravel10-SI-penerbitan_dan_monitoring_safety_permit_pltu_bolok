<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\JSA;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {

        $schedule->call(function () {
            $currentDate = Carbon::now()->toDateString();
            $currentTime = Carbon::now()->toTimeString();

            $jsaCloseds = JSA::where('finish_date', '<=', $currentDate)
                ->orWhere(function ($query) use ($currentDate, $currentTime) {
                    $query->where('finish_date', $currentDate)
                        ->where('finish_time', '<=', $currentTime);
                })
                ->get();

            foreach ($jsaCloseds as $jsaClosed) {
                $jsaClosed->status = 'Closed';
                $jsaClosed->save();
            }

        })->everyFiveSeconds();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
