<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // Import this

abstract class Controller
{
    use AuthorizesRequests;
}
