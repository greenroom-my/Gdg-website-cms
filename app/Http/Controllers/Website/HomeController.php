<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    public function team()
    {
        return view('website.team');
    }

    public function event()
    {
        return view('website.event.index');
    }
}
