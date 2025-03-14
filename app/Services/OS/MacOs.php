<?php

namespace App\Services\OS;

use App\Contracts\OsInterface;

class MacOs implements OsInterface
{

    public function name(): string
    {
        return 'Mac OS';
    }
    public function click(): string
    {
        return 'Mac OS Click';
    }

}
