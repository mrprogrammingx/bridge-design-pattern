<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Services\OS\Linux;
use App\Services\OS\MacOs;
use App\Services\OS\Windows;
use App\Services\UserAccounts\Administrator;
use App\Services\UserAccounts\Guest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {

    }

    public function __invoke(ProfileRequest $request)
    {
        $data = $request->validated();

        $userClass = match($data['user']){
            'administrator' => new Administrator(),
            'guest' => new Guest(),

            default => throw new \InvalidArgumentException('Invalid user class')
        };

        $osClass = match($data['os']){
            'linux' => new Linux(),
            'macos' => new MacOs(),
            'windows' => new Windows(),

            default => throw new \InvalidArgumentException('Invalid os class')
        };

        return $userClass->profile($osClass);
    }
}
