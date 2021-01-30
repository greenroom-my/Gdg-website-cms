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

    public function blog()
    {
        return view('website.categories.index');
    }

    public function blogDetail()
    {
        return view('website.categories.blog.detail');
    }

    public function storiesDetail()
    {
        return view('website.categories.stories.detail');
    }
}
