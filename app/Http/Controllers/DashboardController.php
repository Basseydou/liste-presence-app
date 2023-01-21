<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $participants = auth()->user()->participants;
        return view('dashboard', compact('participants'));
        
    }
}
