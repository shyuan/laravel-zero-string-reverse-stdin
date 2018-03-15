<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class Reverse extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'reverse { string? : A string to be reversed }';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Reverse a string ';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $string = $this->argument('string');

        if($string === null) {
            while ($string = trim(fgets(STDIN))) {
                $this->info(strrev($string));
            }
        } else {
            $this->info(strrev($string));
        }
    }

    /**
	 * Define the command's schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule $schedule
	 *
	 * @return void
	 */
	public function schedule(Schedule $schedule): void
	{
		// $schedule->command(static::class)->everyMinute();
	}
}
