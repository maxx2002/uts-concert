<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $active_home = "active";
        $active_band = "";
        $active_event = "";

        $count_event = Event::count();
        $count_band = Band::count();

        return view('home', compact('active_home', 'active_band', 'active_event', 'count_event', 'count_band'));
    }
}
