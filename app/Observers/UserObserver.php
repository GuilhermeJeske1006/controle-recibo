<?php

namespace App\Observers;

use App\Jobs\sendEmailCreateUser;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        sendEmailCreateUser::dispatch($user);
    }
}
