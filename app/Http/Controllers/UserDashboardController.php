<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // Add any specific logic for the user dashboard
        return view('User.dashboard', ['user' => $user]);
    }
}
