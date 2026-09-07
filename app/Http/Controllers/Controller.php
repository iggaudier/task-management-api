<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Laravel\Sanctum\HasApiTokens;

abstract class Controller
{
    use AuthorizesRequests, HasApiTokens;
}
