<?php

namespace App\Services\OS;

use App\Contracts\OsInterface;

class Linux implements OsInterface
{
    
    public function name(): string
    {
        return 'Linux';
    }
    public function click(): string
    {
        return 'Linux Click';
    }
}
