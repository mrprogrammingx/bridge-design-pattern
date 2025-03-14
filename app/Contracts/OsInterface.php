<?php

namespace App\Contracts;

interface OsInterface
{
    public function name(): string;
    
    public function click(): string;
}
