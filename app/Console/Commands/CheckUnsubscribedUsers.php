<?php

namespace App\Console\Commands;

use App\Jobs\CheckAndDeleteUnsubscribedUsers;
use Illuminate\Console\Command;

class CheckUnsubscribedUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:check-unsubscribed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check and delete unsubscribed users';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        CheckAndDeleteUnsubscribedUsers::dispatch();
        $this->info('Checked and deleted unsubscribed users.');
    }
}
