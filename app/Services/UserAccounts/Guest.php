<?php

namespace App\Services\UserAccounts;

use App\Contracts\OsInterface;
use App\Contracts\UserAccountInterface;

class Guest implements UserAccountInterface
{
    public function profile(OsInterface $os): string
    {
        return 'Guest Profile for: ' . $os->name();
    }
}
