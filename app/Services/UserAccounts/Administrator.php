<?php

namespace App\Services\UserAccounts;

use App\Contracts\OsInterface;
use App\Contracts\UserAccountInterface;

class Administrator implements UserAccountInterface
{
    public function profile(OsInterface $os): string
    {
        return 'Administrator Profile for: ' . $os->name();
    }
}
