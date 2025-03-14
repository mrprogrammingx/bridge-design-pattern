<?php

namespace App\Contracts;

interface UserAccountInterface
{
    public function profile(OsInterface $os): string;
}
