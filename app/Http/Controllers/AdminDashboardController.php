<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // Add any specific logic for the admin dashboard
        return view('Admin.dashboard', ['user' => $user]);
    }
}
