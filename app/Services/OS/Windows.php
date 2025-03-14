<?php

namespace App\Services\OS;

use App\Contracts\OsInterface;

class Windows implements OsInterface
{

    public function name(): string
    {
        return 'Windows';
    }

    public function click(): string
    {
        return 'Windows Click';
    }
}
