<?php

namespace App\Policies;

class CompanyPolicy
{
    public function view(): bool
    {
        return user()->is_master;
    }

    public function viewUpdate(): bool
    {
        return user()->is_admin;
    }
}
