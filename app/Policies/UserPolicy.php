<?php

namespace App\Policies;

class UserPolicy
{
    public function view(): bool
    {
        return user()->is_admin;
    }
}
