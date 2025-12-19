<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardControllerU extends Controller
{
    public function home()
    {
        return view('user.dashboard.home');
    }
}
