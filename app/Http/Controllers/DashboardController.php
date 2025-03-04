<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalevents = Event::count();
        return view('dashboard', compact('totalevents'));
    }
}
